<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);

$this->title = 'zxczx';
?>

<!--引用css asdasd-->
<?= Html::cssFile('@web/statics/common/report/css/jquery-ui.css') ?>
<?= Html::cssFile('@web/statics/common/report/css/dataTables.jqueryui.css') ?>
<?= Html::cssFile('@web/statics/common/report/css/fixedColumns.jqueryui.css') ?>
<!--引用js-->
<?= Html::jsFile('@web/statics/common/report/js/jquery.dataTables.js') ?>
<?= Html::jsFile('@web/statics/common/report/js/dataTables.jqueryui.js') ?>
<?= Html::jsFile('@web/statics/common/report/js/dataTables.fixedColumns.js') ?>



<script type="text/javascript" language="javascript" class="init">
    $(document).ready(function () {
        $('#example').DataTable({
//            "ajax": "data/newjson.json",
            scrollY: "260px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            columnDefs: [
                {width: '20%', targets: 0}
            ],
            fixedColumns: {
                leftColumns: 1
            }
        });
    });
</script>
 
