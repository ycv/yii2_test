<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);

$this->title = 'Top10目录';
?>
<!--引用css-->
<?= Html::cssFile('@web/statics/report/css/trackingreport.css') ?>

<!--引用js-->
<?= Html::jsFile('@web/statics/report/js/sortable_table.min.js') ?>

<script type='text/javascript'>
    //默认 Top10目录
    getReportListDatas("report_list_projectreport");


    function getReportListDatas(id) {
        $.ajax({
            type: "POST",
            dataType: "json",
            data: {'reporttype': id, '_csrf-frontend': _csrf_frontend},
            url: basepath + "/user/report/getreportlistdatas",
            async: true,
            success: function (json) {
                if (json.retval) {
                    setReportHTML_Top(json.data);
                } else {
                }
            },
            error: function () {
                console.log('error');
            }
        });
    }

    /**
     * Top10目录
     */
    function setReportHTML_Top(data) {
        $("#myTable05").empty();
        var listHTML = '<thead><tr><th width="40%">编号</th><th width="40%">项目名称</th><th width="10%">预计采购金额(K)</th></tr></thead>';
        listHTML += '<tbody>';
        $.each(data, function (i, v) {
            listHTML += i % 2 == 0 ? "<tr>" : "'<tr class='odd'>'";
            listHTML += '<td class="numeric_middle">' + v.number + '</td>';
            listHTML += '<td class="numeric_middle">' + v.entry_name + '</td>';
            listHTML += '<td class="numeric">' + parseFloat(v.Estimated_amount_of_purchase).toFixed(2) + '</td>';
            listHTML += '</tr>';
        });
        listHTML += '</tbody>';
        $("#myTable05").html(listHTML);
        $('#myTable05').fixedHeaderTable({altClass: 'odd', footer: true, cloneHeadToFoot: true, autoShow: false});
        $('#myTable05').fixedHeaderTable('show', 1500);
    }


    /**
     * sprintf("%01.2f", $value["Estimated_amount_of_purchase"]);
     * 
     * //取出 判断 localStorage   //获取reportDatas 缓存数据   把字符串转换成JSON对象
     *  var reportDatas = JSON.parse(localStorage.getItem("ReportDatas" + id));if (reportDatas && reportDatas != null) {}
     * 
     * 
     //设置 reportDatas 缓存数据 将JSON对象转化成字符串  JSON.stringify(data);
     localStorage.setItem("ReportDatas" + id, JSON.stringify(json.data));
     */
</script>

<div style="height: 400px;width: 100%;">
    <!-- Top10目录 -->
    <table class="fancyDarkTable" id="myTable05" cellpadding="0" cellspacing="0" style="width: 90%;"></table>
</div>
<div class="clear"></div>

