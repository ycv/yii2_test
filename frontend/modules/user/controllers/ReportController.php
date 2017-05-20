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
        $reportArr = $ReportFrom->getProjectReportLists();
        return $this->render('reportlist');
//        echo "<pre>";
//        var_dump($reportArr);
//        die;
    }

}
