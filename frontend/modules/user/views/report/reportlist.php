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
            listHTML += '<tr><th rowspan="2">飒飒xx的</th><th colspan="2">HR Information</th><th colspan="3">Contact</th></tr>';
            listHTML += '<tr><th>Position</th><th>Salary</th><th>Office</th><th>Extn.</th><th>E-mail</th></tr>';
            listHTML += '</thead>';
            listHTML += '<tfoot><tr><th>Name</th><th>Position</th><th>Salary</th><th>Office</th><th>Extn.</th><th>E-mail</th></tr></tfoot>';
            $("#myTable05").html(listHTML);
        }


        function setReptortDataBody() {
            $("#myTable05").append("<tr><td>Bruno Nash</td><td>Software Engineer</td><td>London</td><td>6222</td><td>2011/05/03</td><td>$163,500</td></tr>");
        }

        function getReptortDatab() {
            $('#myTable05').DataTable({
                bProcessing: true,
                bServerSide: true,
                sAjaxSource: basepath + "/user/report/getdemoarray",
                fnServerData: function (sSource) {
                    $.ajax({
                        "dataType": 'json',
                        "type": "POST",
                        "url": sSource,
                        "data": {'reporttype': "zz", '_csrf-frontend': _csrf_frontend},
                        "success": function (json) {
                            setReptortDataBody(json);
                            Hidden_Layer_OFF();
                        },
                        error: function () {
                            console.log("error");
                        }
                    });
                },
                bFilter: true, //过滤功能
                bSort: true, //排序功能
                bInfo: true, //页脚信息
                bAutoWidth: true, //自动宽度
                aaSorting: [[2, "desc"]], //从第0列开始，以第2列倒序排列
                //改变语言
                "oLanguage": {
                    "sLengthMenu": "每页显示 _MENU_ 条记录",
                    "sInfo": "从 _START_ 到 _END_ /共 _TOTAL_ 条数据",
                    "sInfoEmpty": "没有数据",
                    "sInfoFiltered": "(从 _MAX_ 条数据中检索)",
                    "oPaginate": {
                        "sFirst": "首页",
                        "sPrevious": "前一页",
                        "sNext": "后一页",
                        "sLast": "尾页"
                    },
                    "sZeroRecords": "抱歉， 没有找到",
                    "sProcessing": "<img src='" + basepath + "/statics/common/images/loading.gif' />"
                },
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
    <table id="myTable05" cellpadding="0" cellspacing="0" style="width: 100%;">
<!--        <thead>
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
        </tfoot>-->
    </table>
</div>
<div class="clear"></div>

