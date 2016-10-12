function showLocation(html_series_id) {
    var loc = new Location();
    //更换品牌 加载系列
    $("select[name='CommodityForm[brand_id]']").on("change", function (e) {
        //清空系列下原数据
        $("select[name='CommodityForm[series_idarr][]']").empty();
        //加载系列数据      name class val object
        loc.fillOption('CommodityForm[series_idarr][]', 'select2_series_id', e.val, html_series_id);
    });
}


function Location() {

}

Location.prototype.fillOption = function (el_id, el_class, selected_id, html_series_id) {
    var json = this.find(selected_id);
    //取消选中的系列
    html_series_id.val(null).trigger("change");
    if (json) {
        //取消 锁定
        $('.' + el_class).prop("disabled", false);
        $.each(json, function (k, v) {
            var option = '<option value="' + v.s + '">' + v.name + '</option>';
            $("select[name='" + el_id + "']").append(option);
        });
        //默认选中的系列
        html_series_id.val(json[0].s).trigger("change");
    } else {
        //锁定
        $('.' + el_class).prop("disabled", true);
        alert('该品牌有误！');
    }
};

//根据厂家id获取 系列
Location.prototype.find = function (id) {
    var jsondatas = new Array();
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "../../factorydata/seri/" + id + ".js",
        async: false,
        success: function (json) {
            if ((json) && (json.length > 0)) {
                $.each(json, function (i, v) {
                    //过滤 分类
                    if (v.s > 0) {
                        jsondatas.push(v);
                    }
                });
            }
        }
    });
    if (jsondatas.length > 0) {
        return jsondatas;
    } else {
        return false;
    }
};