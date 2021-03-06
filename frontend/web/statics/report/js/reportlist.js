//默认 top10目录
getReportListDatas("report_list_projectreport");

function getReportListDatas(id) {
    Hidden_Layer_ON();
    //Top10目录
    if ("report_list_projectreport" === id) {
        getAjaxListDatas(id);
    }
}

function getAjaxListDatas(id) {
    $.ajax({
        type: "POST",
        dataType: "json",
        data: {'reporttype': id, '_csrf-frontend': _csrf_frontend},
        url: basepath + "/user/report/getreportlistdatas",
        async: true,
        success: function (json) {
            if (json.retval) {
                //Top10目录
                setReportHTML_Top(json.data);
            } else {
            }
            Hidden_Layer_OFF();
        },
        error: function () {
            alert("error");
        }
    });
}


/**
 * Top10目录
 */
function setReportHTML_Top(data) {
    $("#myTable05").empty();
    $("#myTable05").removeAttr("class");
    if (!$("#myTable05").hasClass("fancyDarkTable")) {
        $("#myTable05").addClass("fancyDarkTable");
    }
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

    $(".fht-table-wrapper .fht-tbody").css("overflow-y", "scroll");
    $(".fht-table-wrapper .fht-tbody").css("overflow-x", "hidden");
    $("#myTable05").css("width", "100%");
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
 
 
 //        setTimeout(function () {
 //            zzxxx();
 //            zzx();
 //        }, 1000);
 */