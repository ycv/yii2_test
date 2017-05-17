<?php

namespace frontend\components;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;

/**
 * User控制器基类,继承权限基类
 */
class BaseUserController extends Controller {

    /**
     * 是否是店铺所有者
     * @var bool
     */
    public $is_admin = 213;

    /**
     * action行为拦截器
     * @return array
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'excelimport' => ['post', 'get'],
                ]
            ],
        ];
    }

    /**
     * 获取action名称，验证是否有权限
     * @param \yii\base\Action $action
     * @return bool
     * @throws \yii\web\BadRequestHttpException
     */
    public function beforeAction($action) {
        //Csrf验证
        if (!parent::beforeAction($action)) {
            return false;
        }
        return parent::beforeAction($action);
    }

}
