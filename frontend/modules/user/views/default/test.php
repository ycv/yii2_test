<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<h5>页面传参数</h5>
<!-- Html::encode($test_data['view_hello_str']); 转译JavaScript代码 -->
<!-- HtmlPurifier::process($test_data['view_hello_str']); 去掉JavaScript代码 ；需要 use yii\helpers\HtmlPurifier; -->

<h1><?= Html::encode($test_data['view_hello_str']); ?></h1>
<h1><?= Html::encode($test_data['view_hello_arr'][0]); ?></h1>
<hr/>
<h5>显示别的页面内容</h5>
<h1><?= $this->render('test_about'); ?></h1>
<br/>
<h1><?= $this->render('test_about', array("v_hello_str" => "hello world2")); ?></h1>
<hr/>
<hr/>
<hr>
    <?php $form = ActiveForm::begin(['id' => 'form_id']); ?>
<div style="color:#999;margin:1em 0">
<?= Html::a('方法跳转', ['default/index']) ?>
</div>
<!-- Listbox with prompt text -->
<?=
$form->field($model, 'test_id')->listBox(
        array('1' => '1', 2 => '2', 3 => 3, 4 => 4, 5 => 5), array('prompt' => 'Select')
);
?>
<!-- Listbox with size -->
<?=
$form->field($model, 'test_id')->listBox(
        array('1' => '1', 2 => '2', 3 => 3, 4 => 4, 5 => 5), array('prompt' => 'Select', 'size' => 3)
);
?>
<!-- Listbox with disabled, style properties -->
<?=
        $form->field($model, 'test_id')->listBox(
                array('1' => '1', 2 => '2', 3 => 3, 4 => 4, 5 => 5), array('disabled' => true, 'style' => 'background:gray;color:#fff;'))
        ->label('Gender');
?>

<hr/>
使用输入文本框
<?= $form->field($model, 'test_id'); ?>
<?= $form->field($model, 'test_id')->textInput(array('style' => 'width:150px;'))->hint('11Please enter your name')->label(' 22') ?>
<hr/>
TextArea 文本域
<?= $form->field($model, 'test_id')->textarea(); ?>
<?= $form->field($model, 'test_id')->textarea()->label('Description'); ?>
<?= $form->field($model, 'test_id')->textarea(array('rows' => 2, 'cols' => 5)); ?>
<hr/>
Password Input Field
<?= $form->field($model, 'test_id')->input('password') ?>
<?= $form->field($model, 'test_id')->passwordInput() ?>
<?= $form->field($model, 'test_id')->passwordInput()->hint('Password should be within A-Za-z0-9')->label('Password Hint') ?>
<hr/>
HTML5 Email Input Field
<?= $form->field($model, 'test_id')->input('email') ?>
<hr/>
Single File Upload
<?= $form->field($model, 'test_id')->fileInput() ?>
<hr/>
MultiFile Upload

<?php echo $form->field($model, 'test_id')->fileInput(['multiple' => 'multiple']); ?>
<hr/>
Checkbox Button Field

<!-- CHECKBOX BUTTON DEFAULT LABEL -->
<?= $form->field($model, 'test_id')->checkbox(); ?>
<!-- CHECKBOX BUTTON WITHOUT LABEL -->
<?= $form->field($model, 'test_id')->checkbox(array('label' => '12')); ?>
<!-- CHECKBOX BUTTON WITH CUSTOM LABEL -->
<?=
        $form->field($model, 'test_id')->checkbox(array('label' => '22'))
        ->label('Gender');
?>
<!-- CHECKBOX BUTTON WITH LABEL OPTIONS, DISABLED AND STYLE PROPERTIES -->
<?=
        $form->field($model, 'test_id')->checkbox(array(
            'label' => '33',
            'labelOptions' => array('style' => 'padding:5px;'),
            'disabled' => true
        ))
        ->label('Gender');
?>
<hr/>
Checkbox复选
<?php echo $form->field($model, 'test_id[]')->checkboxList(['a' => 'Item A', 'b' => 'Item B', 'c' => 'Item C']); ?>
<hr/>
Radio Button Field

<!-- RADIO BUTTON DEFAULT LABEL -->
<?= $form->field($model, 'test_id')->radio(); ?>
<!-- RADIO BUTTON WITHOUT LABEL -->
<?= $form->field($model, 'test_id')->radio(array('label' => '')); ?>
<!-- RADIO BUTTON WITH CUSTOM LABEL -->
<?=
        $form->field($model, 'test_id')->radio(array('label' => ''))
        ->label('Gender');
?>
<!-- RADIO BUTTON WITH LABEL OPTIONS -->
<?=
        $form->field($model, 'test_id')->radio(array(
            'label' => '22222222',
            'labelOptions' => array('style' => 'padding:5px;')))
        ->label('Gender');
?>

<hr/>
单选按扭
<?= $form->field($model, 'test_id')->radioList(array('1' => 'One', 2 => 'Two')); ?>
<hr/>
dropDown List Input Field

<?= $form->field($model, 'test_id')->dropDownList(['a' => 'Item A', 'b' => 'Item B', 'c' => 'Item C'])->label('Name'); ?>
<hr/>
<hr/>
<hr/>
<hr/>
<hr/>
<hr/>
<?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
<hr/>
<?php ActiveForm::end(); ?>
