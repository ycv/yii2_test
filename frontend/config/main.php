<?php

$params = array_merge(
        require(__DIR__ . '/../../common/config/params.php'), require(__DIR__ . '/../../common/config/params-local.php'), require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        //配置URL重写
        'urlManager' => [
            //启用路由
            'enablePrettyUrl' => true,
//            'enableStrictParsing' => false,
            //false为隐藏 index.php
            'showScriptName' => true,
            //url重写规则
            'rules' => [
//                //oauth2.0
//                'POST oauth2/<action:\w+>' => 'oauth2/oauth2/<action>',
//                '' => 'site/index',
//                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                //微信端
//                'infi/<controller:\w+>/<action:\w+>/<id:\w+>' => 'infi/<controller>/<action>',
                'infi/<controller:\w+>/<action:\w+>' => 'infi/<controller>/<action>',
//                //后台权限
//                'rbac/<controller:\w+>/<action:\w+>' => 'rbac/<controller>/<action>',
            ],
        ],
//        'urlManager' => [
//            'enablePrettyUrl' => true,
//            'showScriptName' => false,
//            'rules' => [
//            ],
//        ],
    ],
    'modules' => [
        'infi' => [
            'class' => 'frontend\modules\infi\InfiModule',
        ],
    ],
    'params' => $params,
];
