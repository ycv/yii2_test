<?php

namespace frontend\modules\user\controllers;

use YII;
use common\components\Upload;
use frontend\components\BaseUserController;

class ExcelController extends BaseUserController {

    public $layout = "userlist_comment";

    /**
     * Excel导入  
     */
    public function actionExcelimport() {
//        echo $this->is_admin; die;
        if (YII::$app->request->post()) {
            $upload = new Upload();
            //创建文件目录
            $filepath = 'uploads/excel/' . date('Y/m/d', time()) . '/';
            $upload->mkDirs($filepath);
            //生成随机文件名
            $ad_randname = $upload->generateRandFileName();
            //获取文件后缀名
            $fileSuffixName = $upload->fileext($_FILES['upfile']['name']);
            //文件生成路径
            $uploadfile = $filepath . $ad_randname . "." . $fileSuffixName;
            if (move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile)) {
                $this->excelRead($uploadfile);
            } else {
                echo "上传失败!";
                die;
            }
        }

        return $this->render('excelimport');
    }

    /**
     * Excel导出
     */
    public function actionExcelexport() {

        if (is_object($orderstrjson)) {
            $fileName = date("YmdHis");

            //引入PHPexcel组件类
            require Yii::$app->vendorPath . '/PHPExcel/PHPExcel.php';

            $PHPExcel = new \PHPExcel();

            //设置基本信息
            $PHPExcel->getProperties()->setCreator("leadsoft")
                    ->setLastModifiedBy("leadsoft")
                    ->setTitle('leadsoft')
                    ->setSubject('product inquiry sheet')
                    ->setDescription("")
                    ->setKeywords('product inquiry sheet')
                    ->setCategory("");
            $PHPExcel->setActiveSheetIndex(0);
            $PHPExcel->getActiveSheet()->setTitle('产品询价单');

            //第一行填入主标题
            $PHPExcel->getActiveSheet()->setCellValue('A2', '产品询价单');

            //第二行填入表头
            $PHPExcel->getActiveSheet()->setCellValue('A7', '品名');
            $PHPExcel->getActiveSheet()->setCellValue('B7', '型号规格');
            $PHPExcel->getActiveSheet()->setCellValue('C7', '厂家');
            $PHPExcel->getActiveSheet()->setCellValue('D7', '单位');
            $PHPExcel->getActiveSheet()->setCellValue('E7', '数量');

            $PHPExcel->getActiveSheet()->setCellValue('F7', '单价');
            $PHPExcel->getActiveSheet()->setCellValue('G7', '价格小计');

            //$PHPExcel->getActiveSheet()->setCellValue('F7', '表价');
            //$PHPExcel->getActiveSheet()->setCellValue('G7', '折扣');
            //$PHPExcel->getActiveSheet()->setCellValue('H7', '折后');
            //$PHPExcel->getActiveSheet()->setCellValue('I7', '折后小计');
            //设置单元格背景颜色
            $PHPExcel->getActiveSheet()->getStyle('A7:F7')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFDDDDDD');
            $PHPExcel->getActiveSheet()->getStyle('G7:G7')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFFDCC99');

            //第三行填入列表
            $k = 8;
            $AttachTotal = 0;

            foreach ($orderstrjson->Details as $r) {
                $PHPExcel->getActiveSheet()->getStyle('A' . $k . ':G' . $k)->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER); //垂直居中

                $PHPExcel->getActiveSheet()->setCellValue('A' . $k, $r->SName); //品名
                $PHPExcel->getActiveSheet()->getStyle('B' . $k)->getAlignment()->setWrapText(true); //自动换行
                $PHPExcel->getActiveSheet()->setCellValue('B' . $k, $r->ProductName); //型号
                $PHPExcel->getActiveSheet()->setCellValue('C' . $k, $r->FactName); //制造商
                $PHPExcel->getActiveSheet()->getStyle('D' . $k)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                //$PHPExcel->getActiveSheet()->setCellValue('D' . $k, $r->Unit);//单位
                $PHPExcel->getActiveSheet()->setCellValue('D' . $k, '只'); //单位
                $PHPExcel->getActiveSheet()->getStyle('E' . $k)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                $PHPExcel->getActiveSheet()->getStyle('E' . $k)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_NUMBER);
                $PHPExcel->getActiveSheet()->setCellValue('E' . $k, $r->DetailNum); //元件数量
                //$PHPExcel->getActiveSheet()->getStyle('F'.$k)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                //$PHPExcel->getActiveSheet()->getStyle('F'.$k)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_NUMBER_00);
                //$PHPExcel->getActiveSheet()->setCellValue('F'.$k, $r->Price);//表价
                //$PHPExcel->getActiveSheet()->getStyle('G'.$k)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                //$PHPExcel->getActiveSheet()->getStyle('G'.$k)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00);

                $PHPExcel->getActiveSheet()->getStyle('F' . $k)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                $PHPExcel->getActiveSheet()->getStyle('F' . $k)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_NUMBER_00);

                $PHPExcel->getActiveSheet()->getStyle('G' . $k)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                $PHPExcel->getActiveSheet()->getStyle('G' . $k)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_NUMBER_00);
                $PHPExcel->getActiveSheet()->setCellValue('G' . $k, $r->Total); //小计
                //$PHPExcel->getActiveSheet()->setCellValueExplicit('I'.$k, $r->Total,\PHPExcel_Cell_DataType::TYPE_FORMULA);//小计
                $rindex = $k;

                $rtotal = 0;
                $attachindex = 1;
                $k++;
                if (count($r->ItemList) > 1) {
                    //创建明细
                    foreach ($r->ItemList as $rc) {
                        $PHPExcel->getActiveSheet()->getStyle('A' . $k . ':G' . $k)->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER); //垂直居中

                        $PHPExcel->getActiveSheet()->getStyle('A' . $k)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

                        if ($rc->IsMain == '0') {
                            $AttachTotal = $AttachTotal + ($rc->Price * $r->DetailNum);
                            $PHPExcel->getActiveSheet()->setCellValue('A' . $k, '附件' . $attachindex); //品名
                            $attachindex++;
                        } else {
                            $PHPExcel->getActiveSheet()->setCellValue('A' . $k, '本体'); //品名
                        }

                        $PHPExcel->getActiveSheet()->getStyle('B' . $k)->getAlignment()->setWrapText(true); //自动换行
                        $PHPExcel->getActiveSheet()->setCellValue('B' . $k, urldecode($rc->ItemName)); //型号
                        $PHPExcel->getActiveSheet()->setCellValue('C' . $k, urldecode($r->FactName)); //制造商
                        $PHPExcel->getActiveSheet()->getStyle('D' . $k)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                        $PHPExcel->getActiveSheet()->setCellValue('D' . $k, urldecode($r->Unit)); //单位
                        $PHPExcel->getActiveSheet()->getStyle('E' . $k)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                        $PHPExcel->getActiveSheet()->getStyle('E' . $k)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_NUMBER);
                        $PHPExcel->getActiveSheet()->setCellValue('E' . $k, $r->DetailNum); //数量
                        //$PHPExcel->getActiveSheet()->getStyle('F'.$k)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                        //$PHPExcel->getActiveSheet()->getStyle('F'.$k)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_NUMBER_00);
                        //$PHPExcel->getActiveSheet()->setCellValue('F'.$k,$rc->Price,\PHPExcel_Cell_DataType::TYPE_NUMERIC);
                        //$PHPExcel->getActiveSheet()->getStyle('G'.$k)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                        //$PHPExcel->getActiveSheet()->getStyle('G'.$k)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00);
                        if ($rc->ItemRate > 1) {

                            //$PHPExcel->getActiveSheet()->setCellValue('G'.$k,($rc->ItemRate/100));//折扣
                        } else {
                            //$PHPExcel->getActiveSheet()->setCellValue('G'.$k,$rc->ItemRate);//折扣
                        }

                        $PHPExcel->getActiveSheet()->getStyle('F' . $k)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                        $PHPExcel->getActiveSheet()->getStyle('F' . $k)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_NUMBER_00);
                        $PHPExcel->getActiveSheet()->setCellValue('F' . $k, $rc->PriceDisc); //折后
                        $PHPExcel->getActiveSheet()->getStyle('G' . $k)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                        $PHPExcel->getActiveSheet()->getStyle('G' . $k)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_NUMBER_00);
                        $PHPExcel->getActiveSheet()->setCellValue('G' . $k, ($rc->PriceDisc * $r->DetailNum)); //小计

                        $rtotal += $rc->PriceDisc * $r->DetailNum;

                        //$PHPExcel->getActiveSheet()->setCellValue('G'.$rindex, ($rtotal/$r->Total));//折扣
                        $PHPExcel->getActiveSheet()->setCellValue('F' . $rindex, $r->Price * ($rtotal / $r->Total)); //折后

                        $k++;
                    }
                } else {

                    //echo $r->ItemList;
                    //var_dump($r->ItemList);
                    foreach ($r->ItemList as $rc) {
                        $rtotal += $rc->PriceDisc * $r->DetailNum;

                        if ($rc->Price == "0") {
                            //$PHPExcel->getActiveSheet()->setCellValue('G'.$rindex, ('0'));//折扣
                        } else {
                            //$PHPExcel->getActiveSheet()->setCellValue('G'.$rindex, ($rc->PriceDisc / $rc->Price));//折扣
                        }

                        //$PHPExcel->getActiveSheet()->setCellValue('G'.$rindex, ($rc->PriceDisc / $rc->Price));//折扣
                        //$PHPExcel->getActiveSheet()->setCellValue('G'.$rindex, ($rc->PriceDisc / $r->Price));//折扣
                        //$PHPExcel->getActiveSheet()->setCellValue('G'.$rindex, ($rtotal/$r->Total));//折扣
                        //$PHPExcel->getActiveSheet()->setCellValue('F'.$rindex, $r->Price*($rtotal/$r->Total));//折后
                        $PHPExcel->getActiveSheet()->setCellValue('F' . $rindex, $rc->PriceDisc); //折后
                    }
                }
            }


            $PHPExcel->getActiveSheet()->setCellValue('A3', '时间：' . date('Y-m-d')); //时间
            $PHPExcel->getActiveSheet()->setCellValue('F3', '本体价格:');
            $PHPExcel->getActiveSheet()->getStyle('G3')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
            $PHPExcel->getActiveSheet()->getStyle('G3')->getNumberFormat()->setFormatCode('￥#,##0.00;￥-#,##0.00');
            $PHPExcel->getActiveSheet()->setCellValue('G3', $orderstrjson->MainTotal); //本体总价格

            $PHPExcel->getActiveSheet()->setCellValue('F4', '附件价格:');
            $PHPExcel->getActiveSheet()->getStyle('G4')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
            $PHPExcel->getActiveSheet()->getStyle('G4')->getNumberFormat()->setFormatCode('￥#,##0.00;￥-#,##0.00');
            $PHPExcel->getActiveSheet()->setCellValue('G4', $AttachTotal); //附件总价格

            $PHPExcel->getActiveSheet()->setCellValue('F5', '总价:');
            $PHPExcel->getActiveSheet()->getStyle('G5')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
            $PHPExcel->getActiveSheet()->getStyle('G5')->getFont()->getColor()->setARGB('FFFF0000');
            $PHPExcel->getActiveSheet()->getStyle('G5')->getNumberFormat()->setFormatCode('￥#,##0.00;￥-#,##0.00');
            $PHPExcel->getActiveSheet()->setCellValue('G5', $orderstrjson->Total); //本体加附件总价
            //合并单元格
            $PHPExcel->getActiveSheet()->mergeCells('A2:G2');

            //设置居中
            $PHPExcel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $PHPExcel->getActiveSheet()->getStyle('A7:G7')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

            //所有垂直居中
            $PHPExcel->getActiveSheet()->getStyle('A2')->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER);

            $styleArray = array(
                'borders' => array(
                    'outline' => array(
                        'style' => \PHPExcel_Style_Border::BORDER_THIN,
                        'color' => array('argb' => 'FF000000'),
                    ),
                ),
            );
            $PHPExcel->getActiveSheet()->getStyle('A3:G5')->applyFromArray($styleArray);

            $styleArray = array(
                'borders' => array(
                    'allborders' => array(
                        'style' => \PHPExcel_Style_Border::BORDER_THIN,
                        'color' => array('argb' => 'FF000000'),
                    ),
                ),
            );

            $PHPExcel->getActiveSheet()->getStyle('A7:G' . ($k - 1))->applyFromArray($styleArray);

            //设置单元格宽度
            $PHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
            $PHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(24);
            $PHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(18);
            $PHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(5);
            $PHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(5);
            //$PHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(12);
            //$PHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(8);
            $PHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(12);
            $PHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(13);

            //设置表头行高
            $PHPExcel->getActiveSheet()->getRowDimension(2)->setRowHeight(30);

            //设置字体样式
            $PHPExcel->getActiveSheet()->getStyle('A2:G2')->getFont()->setName('微软雅黑');
            $PHPExcel->getActiveSheet()->getStyle('A2:G2')->getFont()->setSize(18);
            $PHPExcel->getActiveSheet()->getStyle('A2:G2')->getFont()->setBold(true);

            $PHPExcel->getActiveSheet()->getStyle('A3:G' . ($k - 1))->getFont()->setName('微软雅黑');
            $PHPExcel->getActiveSheet()->getStyle('A3:G' . ($k - 1))->getFont()->setSize(10);
            //$PHPExcel->getActiveSheet()->getStyle('A6')->getFont()->setName('微软雅黑');
            //保存为2003格式
            $objWriter = new \PHPExcel_Writer_Excel5($PHPExcel);


            $upload = new Upload();
            $dirpath = 'uploads/inquiry/';
            $upload->mkDirs($dirpath);

            $fileex = $fileName . '.xls';
            $filepath = Yii::$app->basePath . '/web/uploads/inquiry/' . $fileex;

            $objWriter->save($filepath);

            echo urlencode($fileex);
            exit;
        }
    }

    /**
     * Excel读取
     */
    public function excelRead($filexcelname) {
        //读取xlsx 文件内容 引入PHPexcel组件类
        require Yii::$app->vendorPath . '/PHPExcel/PHPExcel/IOFactory.php';
        
        $objPHPExcelReader = \PHPExcel_IOFactory::load($filexcelname);  //加载excel文件

        $sheet = $objPHPExcelReader->getSheet(0); // 读取第一个工作表(编号从 0 开始)
        echo $highestRow = $sheet->getHighestRow(); // 取得总行数
        echo "<hr>" . $filexcelname;
        die;
        $objPHPExcel = new \PHPExcel();





        echo $filexcelname;
        die;

        echo "asssssssssd<hr>";
        echo $filexcelname;
        die;
    }

}
