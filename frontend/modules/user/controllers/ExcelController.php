<?php

namespace frontend\modules\user\controllers;

use Yii;
use yii\web\Controller;

class ExcelController extends Controller {

    public $layout = "userlist_comment";

    /**
     * Excel导入  
     */
    public function actionExcelimport() {
        return $this->render('excelimport');
    }

}
