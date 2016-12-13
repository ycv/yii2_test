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
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        //日志配置
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                //记录错误级别
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        //配置url重写
        'urlManager' => [
            //启动路由
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            //url重写规则
            'rules' => [
                'user/<controller:\w+>/<action:\w+>' => 'user/<controller>/<action>',
                'study/<controller:\w+>/<action:\w+>' => 'study/<controller>/<action>',
            ],
        ],
    ],
    'modules' => [
        'user' => [
            'class' => 'frontend\modules\user\UserModule',
        ],
        'study' => [
            'class' => 'frontend\modules\study\StudyModule',
        ],
    ],
    'params' => $params,
];
