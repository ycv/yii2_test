<?php

namespace frontend\modules\user\controllers;

use Yii;
use yii\web\Controller;
use frontend\modules\user\models\RegisFrom;

class DefaultController extends Controller {

    public $layout = "userlist_comment";

    public function actionIndex() {

        $RegisFrom = new RegisFrom();
        if ($RegisFrom->load(YII::$app->request->post()) && $RegisFrom->validate()) {
            $RegisFromData = $RegisFrom->regis();
            echo $RegisFromData->user_name;
        }
        return $this->render('index', ["model" => $RegisFrom]);
    }

    public function actionUserlist() {
        $model = new RegisFrom();
        $user_data = $model->getYiiuserData();
        return $this->render('userlist', ["user_data" => $user_data]);
    }

    /**
     * test
     * @return type
     */
    public function actionTest() {
        $model = new RegisFrom();

        //创建一个数组
        $data = array();
        //把需要传递给视图的数据，放到数组中
        $data['view_hello_str'] = "Hello GOD";
        $data['view_hello_arr'] = array(1, 2);


        return $this->render('test', array("model" => $model, "test_data" => $data));
    }

    /**
     * Excel导入
     */
    public function actionExcelimport() {
        return $this->render('excelimport');
    }

}
