<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);

$this->title = 'Txxxxxop10目录';
?>
<!--引用css-->
<?= Html::cssFile('@web/statics/report/css/trackingreport.css') ?>

<?= Html::cssFile('@web/statics/common/report/css/jquery-ui.css') ?>
<?= Html::cssFile('@web/statics/common/report/css/dataTables.jqueryui.css') ?>
<?= Html::cssFile('@web/statics/common/report/css/fixedColumns.jqueryui.css') ?>

<!--引用js-->
<?= Html::jsFile('@web/statics/report/js/sortable_table.min.js') ?>
<?= Html::jsFile('@web/statics/common/report/js/jquery.dataTables.js') ?>
<?= Html::jsFile('@web/statics/common/report/js/dataTables.jqueryui.js') ?>
<?= Html::jsFile('@web/statics/common/report/js/dataTables.fixedColumns.js') ?>

<?= Html::jsFile('@web/statics/report/js/reportlist.js') ?>

<script type='text/javascript'>

</script>

<style type="text/css" class="init">
    /* Ensure that the demo table scrolls */
    #myTable05_wrapper td,#myTable05_wrapper th{
        white-space: nowrap;
        padding-left: 40px !important;
        padding-right: 40px !important;
    }

    div.dataTables_wrapper {
        margin: 0 auto;
    }
</style>

<div style="height: 420px;width: 100%;">
    <table id="myTable05" cellpadding="0" cellspacing="0" style="width: 100%;"></table>
</div>
<div class="clear"></div>

