<?php

namespace frontend\modules\study\controllers;

use Yii;
use yii\web\Controller;
use frontend\components\BaseStudyController;
use frontend\modules\study\models\AdduserForm;
use common\components\FileHelper;
use yii\base\Exception;
use common\components\SendMessage\top\TopClient;
use common\components\SendMessage\top\request\AlibabaAliqinFcSmsNumSendRequest;

class DefaultController extends BaseStudyController {

    public $layout = "main";

    public function actionIndex() {
        //调用基类变量
        //echo $this->is_admin;
        //$this->actionGetaddressdatabyjson($AdduserForm_addressid);
        //echo $AdduserForm_addressid;die;


        return $this->render('index');
    }

    public function actionDemo() {
        $this->actionSendmessage();
        die;
        //不调用共用样式
        $this->layout = null;
        return $this->render('demo');
    }

    /**
     * 用户管理->添加数据old
     */
    public function actionAdduserdatasOld() {
        $inquiry_idt = "<table><tr><td>11</td><td>22</td></tr></table>";
        $json ['retval'] = true;
        $json ['data'] = $inquiry_idt;
        echo json_encode($json);
        exit();
    }

    /**
     * 用户管理->添加数据
     */
    public function actionAdduserdatas() {
        //echo ("<script>window.ss();</script>");exit();
        //echo Yii::$app->controller->action->id;die;
        $adduserForm = new AdduserForm();
        //数据入库
        if ($adduserForm->load(Yii::$app->request->post()) && $adduserForm->validate()) {
            //echo "<pre>";var_dump(Yii::$app->request->post());die;
            $json ['retval'] = false;
            //兴趣
            $adduserForm->userInterest = implode(',', Yii::$app->request->post()['AdduserForm']['userInterest']);
            //地址
            $adduserForm->useraddr = Yii::$app->request->post()['AdduserForm_address'];
            if ($adduserForm->studyadddatas()) {
                //保留数据成功
                $json ['retval'] = true;
            } else {
                //保留数据失败
                $json ['retval'] = false;
            }
            echo json_encode($json);
            exit();
        }
        //加载右边内容样式
        $this->layout = "main_right";
        return $this->render('adduserdatas');
    }

    /*
     * 获取json文件中的地址数据
     */

    public function actionGetaddressdatabyjson($addressid) {
        $addressdata_arr = array();
        $addressfile = Yii::$app->basePath . '/web/factorydata/citiesdatas/sql_areas.json';
        $addressdata = FileHelper::file_get($addressfile);
        //json_decode true参数可以返回数据， 默认为对象
        $addressdata_arr = json_decode($addressdata, true);
        //echo "<pre>";var_dump($addressdata_arr);die;
        $addressdata_arrtemp = array();
        foreach ($addressdata_arr as $city__v) {
            if (3 == $city__v["level"] && $addressid == $city__v["id"]) {
                $addressdata_arrtemp[3] = $city__v["cname"];
                //echo "<pre>";var_dump($city__v);die;
            }
        }
        unset($addressdata_arr);
        unset($addressfile);
        unset($addressdata);
        return $addressdata_arrtemp;
    }

    /**
     * 用户管理->添加数据 判断名字是否存在
     */
    public function actionAddusernameisexists() {
        $valid = true;
        $Verification_name = Yii::$app->request->post()["AdduserForm"]["username"];
        $adduserForm = new AdduserForm();
        //strlen mb_strlen
        if (mb_strlen($Verification_name, 'utf-8') > 5) {
            $Verificationdata = $adduserForm->VerificationUserNameIsExist($Verification_name);
            if ($Verificationdata) {
                $valid = false;
            }
        }
        //echo "<pre>";var_dump($Verificationdata);die;
        echo json_encode(array(
            'valid' => $valid,
        ));
        exit();
    }

    public function actionUserlistdatas() {
        //加载右边内容样式
        $this->layout = "main_right";
        return $this->render('userlistdatas');
    }

    /**
     * 商品列表
     */
    public function actionProlistdatas() {
        //加载右边内容样式
        $this->layout = "main_right";
        return $this->render('prolistdatas');
    }

    /**
     * 商品添加
     */
    public function actionAddprodatas() {
        //加载右边内容样式
        $this->layout = "main_right";
        return $this->render('addprodatas');
    }

    /**
     * 发送短信
     */
    public function actionSendmessage() {
        $send_tel = "15229339367";
        $send_content = "月落乌啼霜满天。";
        $c = new TopClient;
        $c->appkey = \Yii::$app->params['send_appkey'];
        $c->secretKey = \Yii::$app->params['send_secretKey'];
        $req = new AlibabaAliqinFcSmsNumSendRequest;
        $req->setExtend("dq123");
        $req->setSmsType("normal");
        //短信签名
        $req->setSmsFreeSignName(\Yii::$app->params['send_setSmsFreeSignName']);
        //发送内容
        //$req->setSmsParam("{\"name\": \"按时asda收到\",\"code\": \"888888\", \"product\": \"踩踩踩从\"}");
        $req->setSmsParam("{\"name\": \"" . $send_content . "\"}");
        //请填写需要接收的手机号码
        $req->setRecNum($send_tel);
        //$req->setRecNum("18709223121");
        //短信模板id
        $req->setSmsTemplateCode(\Yii::$app->params['send_SMS_template_ID']);
        $resp = $c->execute($req);
        echo "<pre>";
        var_dump($resp);
        echo "<hr>ddddddd";
        die;
    }

}
