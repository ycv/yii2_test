<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);

$this->title = 'Txop10目录';
?>
<!--引用css-->
<?= Html::cssFile('@web/statics/report/css/trackingreport.css') ?>

<!--引用js-->
<?= Html::jsFile('@web/statics/report/js/sortable_table.min.js') ?>
<?= Html::jsFile('@web/statics/report/js/reportlist.js') ?>
<script type='text/javascript'>

</script>

<div style="height: 420px;width: 100%;">
    <!-- Top10目录 -->
    <table class="fancyDarkTable" id="myTable05" cellpadding="0" cellspacing="0" style="width: 100%;"></table>
</div>
<div class="clear"></div>

