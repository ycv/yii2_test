<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);

$this->title = '项目跟踪报表';
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
        function setReptortDataHead() {
            Hidden_Layer_ON();
            $("#myTable05").empty();
            $("#myTable05").removeAttr("class");
            if (!$("#myTable05").hasClass("stripe")) {
                $("#myTable05").addClass("stripe");
            }
            if (!$("#myTable05").hasClass("row-border")) {
                $("#myTable05").addClass("row-border");
            }
            if (!$("#myTable05").hasClass("order-column")) {
                $("#myTable05").addClass("order-column");
            }

            var listHTML = '<thead>';
            listHTML += '<tr>\n\
                    <th rowspan="2">编号</th>\n\
                    <th rowspan="2">项目名称</th>\n\
                    <th rowspan="2">区域</th>\n\
                    <th rowspan="2">地址</th>\n\
                    <th rowspan="2">所属行业</th>\n\
                    <th rowspan="2">投资单位</th>\n\
                    <th rowspan="2">规模(万)平方米</th>\n\
                    <th rowspan="2">甲方联系人</th>\n\
                    <th rowspan="2">电话</th>\n\
                    <th rowspan="2">设计单位</th>\n\
                    <th rowspan="2">设计师</th><th rowspan="2">设计院 跟踪人</th>\n\
                    <th rowspan="2">工程进展</th>\n\
                    <th colspan="2">HR Information</th>\n\
                    <th colspan="3">Contact</th>\n\
            </tr>';
            listHTML += '<tr><th>Position</th><th>Salary</th><th>Office</th><th>Extn.</th><th>E-mail</th></tr>';
            listHTML += '</thead>';

            listHTML += '<tfoot>';
            listHTML += '<tr><th>编号</th><th>项目名称</th><th>区域</th><th>地址</th><th>所属行业</th><th>投资单位</th><th>规模(万)平方米</th><th>甲方联系人</th><th>电话</th><th>设计单位</th><th>设计师</th><th>设计院 跟踪人</th><th>工程进展</th><th>Position</th><th>Salary</th><th>Office</th><th>Extn.</th><th>E-mail</th></tr>';
            listHTML += '</tfoot>';

            $("#myTable05").html(listHTML);
        }

        function getReptortDatab() {
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
            Hidden_Layer_OFF();
        }


        setReptortDataHead();
        getReptortDatab();
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
    <table id="myTable05" cellpadding="0" cellspacing="0" style="width: 100%;"></table>
</div>
<div class="clear"></div>

