<?php

namespace frontend\modules\user\controllers;

use YII;
use yii\web\Controller;
use common\components\Upload;

class ExcelController extends Controller {

    public $layout = "userlist_comment";

    /**
     * Excel导入  
     */
    public function actionExcelimport() {


//        echo "<pre>";
//        var_dump(YII::$app->request->post());
//        die;

        if (YII::$app->request->post()) {
            echo "xxxx";
            die;
        }
        return $this->render('excelimport');
    }

    /**
     * Excel导出
     */
    public function actionExcelexport() {
         
        $fileName = date("YmdHis");

        //引入PHPexcel组件类
        require Yii::$app->vendorPath . '/PHPExcel2/PHPExcel.php';



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

        //设置单元格背景颜色
        $PHPExcel->getActiveSheet()->getStyle('A7:F7')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFDDDDDD');
        $PHPExcel->getActiveSheet()->getStyle('G7:G7')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFFDCC99');

        //第三行填入列表
        $k = 8;
        $AttachTotal = 0;



        $PHPExcel->getActiveSheet()->setCellValue('A3', '时间：' . date('Y-m-d')); //时间
        $PHPExcel->getActiveSheet()->setCellValue('F3', '本体价格:');
        $PHPExcel->getActiveSheet()->getStyle('G3')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $PHPExcel->getActiveSheet()->getStyle('G3')->getNumberFormat()->setFormatCode('￥#,##0.00;￥-#,##0.00');
        $PHPExcel->getActiveSheet()->setCellValue('G3', 23000); //本体总价格
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
