<?php

namespace frontend\modules\infi\controllers;

use Yii;
use yii\web\Controller;
use common\models\Yii2TestTestDemo;

class DefaultController extends Controller {

    public function actionIndex() {
        echo "aaaaaaa";
        die;
        //类的映射
        YII::$classMap['common\models\Yii2TestTestDemo'] = 'G:\workspaces\yii2_test\common\models\Yii2TestTestDemo.php';
        $oinfitest = new Yii2TestTestDemo;
        echo "aaaaaaa";
        die;
        return $this->render('index');
    }

    public function actionArticle() {
        ECHO "hasssssshah";
        die;
    }

}
