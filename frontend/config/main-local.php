<?php

//前台应用配置及其它配置
$config = [
    'components' => [
        'request' => [
            ////CSRF跨站请求伪造攻击防范
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'jdSLgl9KJGYXz1uVJ7t8-bXHnztMzICk',
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
            //配置允许远程调试，显示调试状态栏
//        'allowedIPs' => ['127.0.0.1', '::1']
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
            //配置允许远程调试，显示Gii
//        'allowedIPs' => ['127.0.0.1', '::1']
    ];
}

return $config;
