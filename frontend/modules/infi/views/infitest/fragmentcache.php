<?php

use yii\helpers\Html;
?>
<?php
//缓存时间 10秒
$duration = 10;
//片段缓存依赖  文件、数据库依赖等等
//表达式依赖   get("name")参数变化时 缓存失效
$dependency = [
    'class' => 'yii\caching\ExpressionDependency',
    'expression' => 'YII::$app->request->get("name")'
];
/*
  数据库依赖
  $dependency = [
  'class' => 'yii\caching\DbDependency',
  'sql' => 'select count(*) from infi_testdemo'
  ];

 * 文件依赖
 * $dependency = [
  'class' => 'yii\caching\FileDependency',
  'fileName' => 'hw.txt'
  ];
 */
//缓存开关 true or false 默认是true
$enabled = true;
?>
<?php
//beginCache 第二个参数是可选参数，数组格式 设置缓存时间或者依赖缓存属性
?>
<?php if ($this->beginCache('cache_div2', ['dependency' => $dependency])) { ?>
    <div id="cache_div2">
        <div>这里待会会被缓存12</div>
        <span><?= Html::encode($ttest1); ?></span>
        <span><?= Html::encode($ttest2); ?></span>
        <hr>
        <!-- 缓存嵌套 需注意 内存缓存的时间需大于外层缓存段的时间，否则效果不明显-->
        <?php if ($this->beginCache('cache_div2222', ['duration' => 15])) { ?>
            <div id="cache_div2222">
                <div>内存缓存：这里待会会被缓存11</div>
                <span><?= Html::encode($ttest2); ?></span>
            </div>
            <?php
            $this->endCache();
        }
        ?>

    </div>
    <?php
    $this->endCache();
}
?>
<hr>
<div id="no_cache_div">
    <div>这里不会被缓存</div>
    <span><?= Html::encode($ttest1); ?></span>
    <span><?= Html::encode($ttest2); ?></span>
</div>