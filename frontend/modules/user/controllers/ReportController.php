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
        //获取缓存组件
        $oSetcache = YII::$app->cache;

        $oGetcache = $oSetcache->get("reportTop_directory");
//        echo "<pre>";
//        var_dump($oGetcache);
//        die;
        if (!$oGetcache) {
            $ReportFrom = new ReportFrom();
            //Top10目录
            $reportTop_directory = $ReportFrom->getReportTopLists();
            //往缓存当中写数据 当add 添加重复缓存时 key 相同，第二条不会执行；当key已经存在时，add不会执行
            $oSetcache->add('reportTop_directory', $reportTop_directory, 7200); //存在7200秒
            //读缓存
            $oGetcache = $oSetcache->get("reportTop_directory");
        }


        unset($reportTop_directory);
        unset($ReportFrom);
        unset($oSetcache);


        return $this->render('reportlist', ["reportArr" => $oGetcache]);
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
        $json ['retval'] = false;
        $json ['data'] = [];
        if (isset(Yii::$app->request->post()["reporttype"])) {
            $ReportFrom = new ReportFrom();
            $json ['data'] = $ReportFrom->getReportTopLists();
            $json ['retval'] = true;
        }

        echo json_encode($json);
        die();
    }

}
