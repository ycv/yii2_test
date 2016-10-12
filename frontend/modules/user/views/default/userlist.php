<?php

use yii\helpers\Url;
?>

<div class="page-heading">
    <h3>
        元件列表数据
    </h3>
    <ul class="breadcrumb">
        <li>
            <a href="#">厂家数据</a>
        </li>
        <li class="active">元件数据</li>
    </ul>
    <div class="state-info">
        <section class="panel">
            <div class="panel-body">
                <div class="summary">
                    <span>分类数</span>
                    <h3 class="red-txt" > <?= $seriesnum; ?></h3>
                </div>
                <div id="income" class="chart-bar"></div>
            </div>
        </section>
        <section class="panel">
            <div class="panel-body">
                <div class="summary">
                    <span>品牌数</span>
                    <h3 class="green-txt"><?= count($f_fatas); ?></h3>
                </div>
                <div id="expense" class="chart-bar"></div>
            </div>
        </section>
    </div>
</div>
<div class="wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <!-- 品牌 -->
                <div class="panel-body extra-pad">
                    <h4 class="pros-title">品牌： <!-- <span>收起</span>--></h4>
                    <div class="row" id='brand_name-row'>
                        <?php foreach ($f_fatas as $k => $v) { ?>
                            <div class="col-sm-3 col-xs-4">
                                <!---<div id=""></div> -->
                                <p id="f_<?= $k ?>" class="p-chart-title" title="<?= $v ?>" style="cursor: pointer;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;"><?= $v ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- 分类 -->
                <div class="panel-body extra-pad">
                    <h7 class="pros-title" style="color: #B4B412;font-size:10px;">分类： <!-- <span>收起</span> --></h7>
                    <div class="row" id='series_name-row'>
                        <?php foreach ($s_fatas as $k => $v) { ?>
                            <div class="col-sm-2"  >
                                <!--<p title="<?= $v['series_name'] ?>" id="s_<?= $v['series_id'] ?>" class="p-chart-title" style="color:<?= $v['color'] ?>;cursor: pointer;height:20px;line-height:20px;overflow:hidden;display:block;"><?= $v['series_name'] ?></p>-->
                                <p  onclick="switchdatabyseries_id(this.id);" title="<?= $v['series_name'] ?>" id="s_<?= $v['series_id'] ?>" class="p-chart-title" style="cursor: pointer;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;"><?= $v['series_name'] ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- 元件列表 -->
        <div class="col-md-12">
            <div class="panel">
                <header class="panel-heading">
                    元件列表
                    <span class="tools pull-right">
                        <!--
                        <a class="fa fa-chevron-down" href="javascript:;"></a>
                        <a class="fa fa-times" href="javascript:;"></a>
                        -->
                    </span>
                </header>
                <div class="panel-body">
                    <ul class="to-do-list" id="sortable-todo">
                        <?php foreach ($p_fatas as $k => $v) { ?>
                            <li class="clearfix">
                                <span class="drag-marker" title="pro_<?= $v['id'] ?>">
                                    <i></i>
                                </span>
                                <div class="todo-check pull-left">
                                    <input type="checkbox" value="None" id="todo-check<?= $v['id'] ?>"/>
                                    <label for="todo-check<?= $v['id'] ?>"></label>
                                </div>
                                <p class="todo-title"  style="color:<?= $v['color'] ?>; <?php if (1 == $v['is_droits']) { ?>font-weight:bold;<?php } ?>" title="<?= $v['remarks'] ?>">
                                    <?= $v['remarks'] ?>
                                </p>
                                <div class="todo-actionlist pull-right clearfix">
                                    <a href="" class="todo-remove"><i class="fa fa-times"></i></a>
                                    <a href="" class=""><i class="fa fa-edit"></i></a>
                                    <a href="javascript:addshopping(<?= $v['id'] ?>);" class="" title="加入购物车"><i class="fa fa-shopping-cart"></i></a>
                                    <!--
                                    <a href="" style=" background:transparent url('<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/images/') ?>plus-white.png') no-repeat 93% center;"></a>
                                    -->
                                </div>
                            </li>
                        <?php } ?>
                        <!--
                        <li class="clearfix">
                            <span class="drag-marker">
                                <i></i>
                            </span>
                            <div class="todo-check pull-left">
                                <input type="checkbox" value="None" id="todo-check3"/>
                                <label for="todo-check3"></label>
                            </div>
                            <p class="todo-title">
                                Wiget & Design placement
                            </p>
                            <div class="todo-actionlist pull-right clearfix">
                                <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </li>
                        -->
                    </ul>
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" class="form-inline">
                                <div class="form-group todo-entry">
                                    <input type="text" placeholder="Enter your ToDo List" class="form-control" style="width: 100%">
                                </div>
                                <button class="btn btn-primary pull-right" type="button"><a href="<?= Url::toRoute(['/user/default/addlistsdata']) ?>">+</a></button>
                                <!-- <button class="btn btn-primary pull-right" type="submit">+</button> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<footer class="sticky-footer">
    SSs所
</footer>

<!-- 购物车 -->
<div id="pro_shoppingcartexit" style="width: 100%;display: none;">
    <p>购物车已有该商品!</p>
</div>

<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/') ?>jquery-ui-1.9.2.custom.min.js"    type="text/javascript" ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/') ?>bootstrap.min.js"    type="text/javascript" ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/') ?>jquery.nicescroll.js"    type="text/javascript" ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/') ?>scripts.js"    type="text/javascript" ></script>

<script type="text/javascript">


                                    var _csrf = '<?= Yii::$app->request->csrfToken ?>';
                                    //默认选中的品牌
                                    var brandIdtemp = '<?= $brandIdtemp ?>';
                                    //默认系列id
                                    var seriesIdtemp = '<?= $seriesIdtemp ?>';
                                    $(function () {
                                        //品牌切换
                                        $("#brand_name-row p").click(function () {
                                            if (!$(this).hasClass("p-chart-title-checked-bold")) {
                                                //品牌id    从第二位截取
                                                var bid = $(this).attr('id').substring(2);
                                                $.ajax({
                                                    type: "POST",
                                                    dataType: "json",
                                                    data: {'_csrf': _csrf, 'bid': bid},
                                                    url: "<?= Url::toRoute(['/user/default/getdatasbybrandidajax']) ?>",
                                                    async: true,
                                                    success: function (json) {
                                                        if (json.retval) {
                                                            getboldbybrandIdtemp(bid);
                                                            //系列数据加载
                                                            if (json.data.series_name.length > 0) {
                                                                $("#series_name-row").empty();
                                                                var series_name_row_html = "";
                                                                $.each(json.data.series_name, function (i, v) {
                                                                    series_name_row_html += '<div class="col-sm-2">';
                                                                    series_name_row_html += '<p onclick="switchdatabyseries_id(this.id);"  title="' + v.series_name + '" id="s_' + v.series_id + '" class="p-chart-title" style="cursor: pointer;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">' + v.series_name + '</p>';
                                                                    series_name_row_html += '</div>';
                                                                });
                                                                $("#series_name-row").html(series_name_row_html);
                                                                switchdatabyseries_id('s_' + json.data.series_id);
                                                            }
                                                        } else {
                                                            alert("此品牌下无数据!!!");
                                                        }
                                                    },
                                                    error: function () {
                                                        alert("系统繁忙，请稍后再试!!!");
                                                    }
                                                });
                                            }
                                        });
                                    });
                                    //加粗选中的品牌
                                    function getboldbybrandIdtemp(b_id) {
                                        var b_id = "f_" + b_id;
                                        $("#brand_name-row").find('p').removeClass("p-chart-title-checked-bold");
                                        $.each($("#brand_name-row").find('p'), function (i, v) {
                                            if (b_id == v.id) {
                                                $("#" + b_id).addClass("p-chart-title-checked-bold");
                                            }
                                        });
                                    }
                                    //加粗选中的系列
                                    function getboldbyseriesIdtemp(s_id) {
                                        var s_id = "s_" + s_id;
                                        $("#series_name-row").find('p').removeClass("p-chart-title-checked-bold");
                                        $.each($("#series_name-row").find('p'), function (i, v) {
                                            if (s_id == v.id) {
                                                $("#" + s_id).addClass("p-chart-title-checked-bold");
                                            }
                                        });
                                    }
                                    //系列切换
                                    function switchdatabyseries_id(s_id) {
                                        if (!$("#" + s_id).hasClass("p-chart-title-checked-bold")) {
                                            //系列id    从第二位截取
                                            var sid = s_id.substring(2);
                                            $.ajax({
                                                type: "POST",
                                                dataType: "json",
                                                data: {'_csrf': _csrf, 'sid': sid},
                                                url: "<?= Url::toRoute(['/user/default/getseriesdatabyajax']) ?>",
                                                async: true,
                                                success: function (json) {
                                                    if (json.retval) {
                                                        getboldbyseriesIdtemp(sid);
                                                        $("#sortable-todo").empty();
                                                        var sortable_todo_li_html = "";
                                                        $.each(json.data, function (i, v) {
                                                            sortable_todo_li_html += '<li class="clearfix">';
                                                            sortable_todo_li_html += '<span class="drag-marker" title="pro_' + v.id + '"><i></i></span><div class="todo-check pull-left">';
                                                            sortable_todo_li_html += '<input type="checkbox" value="None" id="todo-check' + v.id + '"/><label for="todo-check' + v.id + '"></label></div>';
                                                            sortable_todo_li_html += '<p class="todo-title"  style="color:' + v.color + ';   ';
                                                            if (1 == v.is_droits) {
                                                                sortable_todo_li_html += 'font-weight:bold;';
                                                            }
                                                            sortable_todo_li_html += '  " title="' + v.remarks + '">' + v.remarks + '</p>';
                                                            sortable_todo_li_html += '<div class="todo-actionlist pull-right clearfix"><a href="" class="todo-remove"><i class="fa fa-times"></i></a><a href="" class=""><i class="fa fa-edit"></i></a><a   href="javascript:addshopping(' + v.id + ');"  class="" title="加入购物车"><i class="fa fa-shopping-cart"></i></a></div>';
                                                            sortable_todo_li_html += '</li>';
                                                        });
                                                        $("#sortable-todo").html(sortable_todo_li_html);
                                                    } else {
                                                        alert("此系列下无数据!!!");
                                                    }
                                                },
                                                error: function () {
                                                    alert("系统繁忙，请稍后再试!!!");
                                                }
                                            });
                                        }
                                    }

                                    getboldbybrandIdtemp(brandIdtemp);
                                    getboldbyseriesIdtemp(seriesIdtemp);
</script>