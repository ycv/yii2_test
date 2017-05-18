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
        //配置URL重写
        'urlManager' => [
            //启用路由
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            //false为隐藏 index.php
            'showScriptName' => false,
            //url重写规则
            'rules' => [
//                //oauth2.0
//                'POST oauth2/<action:\w+>' => 'oauth2/oauth2/<action>',
                '' => 'site/index',
                
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                
                
                'user/<controller:\w+>/<action:\w+>/<id:\w+>' => 'user/<controller>/<action>',
                'user/<controller:\w+>/<action:\w+>' => 'user/<controller>/<action>',
                
                
                'infi/<controller:\w+>/<action:\w+>' => 'infi/<controller>/<action>',
//                //后台权限
//                'rbac/<controller:\w+>/<action:\w+>' => 'rbac/<controller>/<action>',
            ],
        ],
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
        //日志配置
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                //记录错误级别
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning', 'info', 'trace'],
                ],
                //错误、警告日志存储位置
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                    'categories' => ['error'],
                    'logFile' => '@app/runtime/logs/error/requests.log',
                    'maxFileSize' => 1024 * 2,
                    'maxLogFiles' => 20,
                ],
                //调试、自定义日志存储位置
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['info', 'trace'],
                    'categories' => ['error'],
                    'logFile' => '@app/runtime/logs/info/notification.log',
                    'maxFileSize' => 1024 * 2,
                    'maxLogFiles' => 20,
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
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
        'user' => [
            'class' => 'frontend\modules\user\UserModule',
        ],
    ],
    'params' => $params,
];
