<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html  lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="UTF-8"/>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
        <title>DefaultController_page</title>
        <link type="text/css" rel="stylesheet" href="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/css/') ?>userlist.css"/>
        <style>

        </style>
    </head>
    <body>
        <?= $content; ?>
    </body>
</html>
<?php $this->endPage() ?>




