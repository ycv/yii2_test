/*
 *   修改前请先备份
 */
$(function () {
    /*===================菜单 JS 动作=====================*/
    var menus = $(".t_c_bottom ul>li:first").siblings().andSelf();
    var thisMenu = $("#thisMenu");
    var mt = 161;//默认距离
    var mNow = 0;//获取当前的li
    for (var i = 0; i < menus.length; i++) {
        if (menus.eq(i).hasClass("thisli"))
            mNow = i;
    }
    //给定 thisli 默认位置
    thisMenu.css({left: (mNow * 104 + mt) + "px"});
    menus.hover(function () {
        MenuMove($(this), ($(this).index() * 104 + mt), 1);
        getReportListDatas($(this).attr("id"));
    }, function () {
        MenuMove($(this), (mNow * 104 + mt), 0);
    });
    var MenuAuto;
    function MenuMove(tn, lefts, move) {
        var ti = tn.index();
        var nodes = menus.eq(ti).children(".Nodes");
        nodes.stop();
        clearTimeout(MenuAuto);
        var _h = nodes.children("ul").height() + 23;//8个像素是上、下圆角图片高度 15个像素是 div 的 padding 值
        if (move === 1) {
            thisMenu.stop();
            thisMenu.animate({left: lefts + "px"}, 165);
            nodes.css({height: "0px"}).animate({height: _h + "px"}, 300);
        } else if (move === 0) {
            nodes.css({height: _h + "px"}).animate({height: "0px"}, 300);
            MenuAuto = setTimeout(function () {
                thisMenu.animate({left: lefts + "px"}, 300);
            }, 200);
        }
    }

});

function getReportListDatas(id) {
    return;
    //获取reportDatas 缓存数据   把字符串转换成JSON对象
    var reportDatas = JSON.parse(localStorage.getItem("ReportDatas" + id));
    if (reportDatas && reportDatas != null) {
        setReportHTML_Top(reportDatas);
    } else {
        $.ajax({
            type: "POST",
            dataType: "json",
            data: {'reporttype': id, '_csrf-frontend': _csrf_frontend},
            url: basepath + "/user/report/getreportlistdatas",
            async: true,
            success: function (json) {
                if (json.retval) {
                    //设置 reportDatas 缓存数据 将JSON对象转化成字符串  JSON.stringify(data);
                    localStorage.setItem("ReportDatas" + id, JSON.stringify(json.data));
                    setReportHTML_Top(json.data);
                } else {
//                alert("Error");
                }
            }
        });
    }
}



/**
 * Top10目录
 */
function setReportHTML_Top(data) {
    $("#reprot_list_").empty();
    var listHTML = '';
    $.each(data, function (i, v) {
        listHTML += i % 2 == 0 ? "<tr>" : "'<tr class='odd'>'";
        listHTML += '<td class="numeric_middle">' + v.number + '</td>';
        listHTML += '<td class="numeric_middle">' + v.entry_name + '</td>';
        listHTML += '<td class="numeric">' + parseFloat(v.Estimated_amount_of_purchase).toFixed(2) + '</td>';

        listHTML += '</tr>';
    });
    $("#reprot_list_").html(listHTML);
}