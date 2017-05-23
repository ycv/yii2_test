<?php
/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>
    <?php if (404 == $exception->statusCode) { ?>
        <img src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/images/') ?>404.jpg" />
    <?php } ?>
</div>
