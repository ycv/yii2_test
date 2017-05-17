<?php

namespace frontend\modules\user\controllers;

use Yii;
use yii\web\Controller;
use frontend\modules\user\models\RegisFrom;

class CarController extends Controller {

    public $layout = "user_comment";

    public function actionIndex() {
        echo "aaaaaaaaa";
        die;
    }

    public function actionRegis() {
        $model = new RegisFrom();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            echo "aaaaaaaaa";
        }
        return $this->render('regis', ["model" => $model]);
    }

}
