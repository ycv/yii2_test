<?php

namespace frontend\modules\user\controllers;

use YII;
use frontend\components\BaseUserController;
use frontend\modules\user\models\ReportFrom;

class ReportController extends BaseUserController {

    public $layout = "report_comment";

    /**
     * 获取项目跟踪报表数据
     */
    public function actionProjectreport() {
        $ReportFrom = new ReportFrom();
        $reportArr = array();
//        $reportArr = $ReportFrom->getProjectReportLists();
        //Top10目录
        $reportTop_directory = $ReportFrom->getReportTopLists();

//        echo "<pre>";
//        var_dump($reportArr);
//        die;
        return $this->render('reportlist', ["reportArr" => $reportTop_directory]);
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
