function Storage(name) {
    this.name = name;
    try {
        this.isPData = window.parent && window.parent.eval(name) && !window.parent.eval(name).name ? true : false;
    } catch (e) {
        this.isPData = false;
    }
}
Storage.prototype.data = function (json) {
    if (json) {
        if (this.isPData) {
            if (window.parent.eval(this.name) != json) {
                try {
                    var obj = window.parent.eval(this.name);
                    obj = json;
                } catch (e) {
                }
            }
        } else {
            localStorage.setItem(this.name, JSON.stringify(json));
        }
    } else {
        if (this.isPData) {
            return window.parent.eval(this.name);
        } else {
            var r = localStorage.getItem(this.name);
            if (r == null) {
                return new Array();
            } else {
                return JSON.parse(r);
            }
        }
    }
};
Storage.prototype.clear = function () {
    if (this.isPData) {
        window.parent.eval(this.name).length = 0;
    } else {
        localStorage.removeItem(this.name);
    }
};
var inquiry = new Storage("inquiry");
// 购物车初始化
function Element_Order_Init2() {
    q_order = eval('({"Details":null,"ProductId":[],"ProductNum":0,"Total":0})');
    q_order.Details = new Array();
}
//加入购物车
var q_order = null;
function addshopping(id) {
    var ol = inquiry.data();
    //初始购物车
    if (typeof ol.Details == 'undefined' && (ol == null || ol.length == 0)) {
        Element_Order_Init2();
    } else {
        q_order = null;
        q_order = ol;
    }
    Q_Order_AddDetail2(id, q_order);
}
//商品数据加入 storage
function Q_Order_AddDetail2(c, k) {
    if (c == null || c == 0) {
        return;
    }
    //判断购物车是否存在相同的商品
    var is_exist = $.inArray(c, k.ProductId);
    if (is_exist == -1) {
        $.ajax({
            type: "POST",
            dataType: "json",
            data: {'_csrf': _csrf, 'id': c},
            url: "/user/default/getdatasbypro_idajax",
            async: false,
            success: function (json) {
                if (json.retval) {
                    if (json.data.commoditydata == "undefined" || json.data.commoditydata == null) {
                    } else {
                        json.data.commoditydata.articledata = [];
                        if (json.data.articledata == "undefined" || json.data.articledata == null) {
                        } else {
                            json.data.commoditydata.articledata.push(json.data.articledata);
                        }
                        k.Details.push(json.data.commoditydata);
                    }
                    k.ProductId.push(c);
                    k.ProductNum = k.ProductId.length;
                } else {
                    alert("此商品无数据!!!");
                }
            },
            error: function () {
                alert("系统繁忙，请稍后再试!!!");
            }
        });
        inquiry.data(q_order);
        GetProdInshopcart();
    } else {
        $.blockUI({
            message: $("#pro_shoppingcartexit"),
            fadeIn: 100,
            fadeOut: 100,
            css: {
                border: "0px solid red",
                width: "220px",
                height: "80px",
                top: ($(window).height() - 80) / 2 + 'px',
                left: ($(window).width() - 220) / 2 + 'px',
                cursor: "default"
            }
        });
        //半秒后关掉
        window.setTimeout($.unblockUI, 500);
    }
    //console.log(k);
}
//获取商品个数
function GetProdInshopcart() {
    var a = inquiry.data();
    var $proshopcartNum = $("#proshopcartNum");
    if (a instanceof Array) {
        $proshopcartNum.html(0);
    } else {
        $proshopcartNum.html(a.ProductNum).animate({
            fontSize: "36px"
        }).animate({
            fontSize: "10px"
        });
    }
}







$(function () {
    //购物车 商品详情页面
    $("#proshopcartNum_li").click(function () {
        //锁屏
        $('body').prepend('<div id="ShopCartLockSrceen"></div>');
        $('#ShopCartLockSrceen').css({
            'width': '' + $(document).width() + 'px',
            'height': '' + $(document).height() + 'px',
            'background-color': '#000000',
            'z-index': '1100',
            //设置样式透明
            'opacity': '0.6',
            'position': 'absolute',
            'top': '0px',
            'left': '0px'
        });
        $.blockUI({
            message: $("#pro_shoppingcartdetails"),
            fadeIn: 100,
            fadeOut: 100,
            css: {
                border: "1px solid red",
                width: "80%",
                height: "80%",
                top: "10%",
                left: "10%",
                cursor: "default",
                'z-index': '1200'
            }
        });
    });
    //关闭 购物车 商品详情页面
    $("#CloseCartLockSrceen").click(function () {
        var $ShopCartLockSrceen = document.getElementById("ShopCartLockSrceen");
        if ($ShopCartLockSrceen != null) {
            $ShopCartLockSrceen.parentNode.removeChild($ShopCartLockSrceen);
        }
        $.unblockUI();
    });

});

