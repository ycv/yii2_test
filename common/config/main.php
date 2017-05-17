<?php

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
            //缓存位置
            'cachePath' => '@app/web/cache'
        ],
    ],
    //配置提示信息为中文
    'language' => 'zh-CN',
];
