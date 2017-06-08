<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);

$this->title = 'zxczx';
?>

<!--引用css-->
<?= Html::cssFile('@web/statics/common/report/css/jquery-ui.css') ?>
<?= Html::cssFile('@web/statics/common/report/css/dataTables.jqueryui.css') ?>
<?= Html::cssFile('@web/statics/common/report/css/fixedColumns.jqueryui.css') ?>
<!--引用js-->
<?= Html::jsFile('@web/statics/common/report/js/jquery.dataTables.js') ?>
<?= Html::jsFile('@web/statics/common/report/js/dataTables.jqueryui.js') ?>
<?= Html::jsFile('@web/statics/common/report/js/dataTables.fixedColumns.js') ?>



<script type="text/javascript" language="javascript" class="init">
    $(document).ready(function () {

        function zzx() {
            $('#myTable05').DataTable({
                "ajax": basepath + "/user/report/getdemoarray",
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
        }
        function zzxxx() {
            $("#myTable05").removeAttr("class");
            if (!$("#myTable05").hasClass("stripe")) {
                $("#myTable05").addClass("stripe row-border order-column");
            }





        }
        setTimeout(function () {
            zzxxx();
            zzx();
        }, 1000);
    });
</script>
<style type="text/css" class="init">
    /* Ensure that the demo table scrolls */
    th, td {
        white-space: nowrap;
        padding-left: 40px !important;
        padding-right: 40px !important;
    }
    div.dataTables_wrapper {
        margin: 0 auto;
    }

</style>


<div style="height: 420px;width: 100%;">
    <table id="myTable05" cellpadding="0" cellspacing="0" style="width: 100%;">
        <thead>
            <tr>
                <th rowspan="2">Nawwme</th>
                <th colspan="2">HR Information</th>
                <th colspan="3">Contact</th>
            </tr>
            <tr>
                <th>Position</th>
                <th>Salary</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Salary</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>E-mail</th>
            </tr>
        </tfoot>
    </table>
</div>
<div class="clear"></div>




