<?php

namespace frontend\modules\user\controllers;

use YII;
use frontend\components\BaseUserController;
use frontend\modules\user\models\ReportFrom;

class ReportController extends BaseUserController {

    public $layout = "report_comment";

    /**
     * 获取 Top10目录报表数据  
     */
    public function actionProjectreport() {
        return $this->render('reportlist');
    }

    /**
     * 获取项目跟踪报表数据
     */
    public function actionReportprojectlist() {
        $oGetcache = array();
        return $this->render('reportprojectlist', ["reportArr" => $oGetcache]);
    }

    /**
     * jquery 获取项目跟踪报表数据
     */
    public function actionGetreportlistdatas() {

        //sleep(秒) usleep(毫秒) 让它睡上一会。 
        sleep(1);


        $json ['retval'] = false;
        $json ['data'] = [];
        if (isset(Yii::$app->request->post()["reporttype"])) {
            //获取缓存组件
            $oSetcache = YII::$app->cache;
            $setCacheTympId = Yii::$app->request->post()["reporttype"] . "_directory";
            //读缓存
            $oGetcache = $oSetcache->get($setCacheTympId);

            if (!$oGetcache) {
                $ReportFrom = new ReportFrom();





                //Top10目录
                $reportTopLists = $ReportFrom->getReportTopLists();



                //往缓存当中写数据 当add 添加重复缓存时 key 相同，第二条不会执行；当key已经存在时，add不会执行
                $oSetcache->add($setCacheTympId, $reportTopLists, 7200); //存在7200秒
                //读缓存
                $oGetcache = $oSetcache->get($setCacheTympId);
                unset($reportTopLists);
                unset($ReportFrom);
                unset($oSetcache);
            }
            $json ['data'] = $oGetcache;
            $json ['retval'] = true;
        }

        echo json_encode($json);
        die();
    }

    /**
     * demo array
     */
    public function actionGetdemoarray() {
        $data = array();
        for ($t = 0; $t < 200; $t++) {
            $data[$t][] = rand($t * 10, $t * 100);
            $data[$t][] = "Tiger NixTiger NixonTiger Nixonon";
            $data[$t][] = "$320,80";
            $data[$t][] = "Tiger Nixon";
            $data[$t][] = "System Nixon";
            $data[$t][] = "Tiger 5421";
        }
        $json ['data'] = $data;
        echo json_encode($json);
        die();
    }

}
