<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div style="color:#999;margin:1em 0">
    <?= Html::a('数据列表', ['default/userlist']) ?>
</div>
<?php $this->beginBlock('block1'); ?>
<h1> </h1>
<?php $this->endBlock(); ?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'user_id')->textInput(array('style' => 'width:150px;'))->label(' 学1号') ?>
<?= $form->field($model, 'user_name')->textInput(array('style' => 'width:150px;'))->label(' 姓名') ?>
<br/><br/>
<?= $form->field($model, 'test_id')->textInput(array('style' => 'width:150px;'))->label(' 工号') ?>
<hr/>
<?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
<hr/>
<?php ActiveForm::end(); ?>