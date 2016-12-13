<?php

use yii\helpers\Url;
?>

<!--icheck-->
<link href="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/iCheck/skins/minimal/') ?>_all.css" rel="stylesheet" type="text/css" />
<link href="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/iCheck/skins/square/') ?>_all.css" rel="stylesheet" type="text/css" />
<!--dashboard calendar-->
<!--
<link href="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/css/') ?>clndr.css" rel="stylesheet" type="text/css" />
-->
<!-- user css-->
<link href="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/css/') ?>table-responsive.css" rel="stylesheet" type="text/css" />
<link href="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/css/') ?>style-responsive.css" rel="stylesheet" type="text/css" />
<!-- ios and tags plugin   -->
<link href="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/ios-switch/') ?>switchery.css" rel="stylesheet" type="text/css" />
<link href="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/jquery-tags-input/') ?>jquery.tagsinput.css" rel="stylesheet" type="text/css" />
<!--pickers css  lzb-->
<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/bootstrap-datepicker/css/') ?>datepicker-custom.css"  />
<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/bootstrap-timepicker/css/') ?>timepicker.css" />
<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/bootstrap-colorpicker/css/') ?>colorpicker.css" />
<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/bootstrap-daterangepicker/') ?>daterangepicker-bs3.css"  />
<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/bootstrap-datetimepicker/css/') ?>datetimepicker-custom.css"  />
<!-- editor     -->
<link href="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/bootstrap-wysihtml5/') ?>bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
<!-- select2   --> 
<link href="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/select2/') ?>select2.css" rel="stylesheet" type="text/css" />
<!-- app js plugins    -->
<link href="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/jdialog/css/') ?>JDialog.min.css" rel="stylesheet" type="text/css" />


<!-- user css-->
<link href="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/css/') ?>style-custom.css" rel="stylesheet" type="text/css" />


<ul class="breadcrumb panel">
    <li><a href="<?= Url::toRoute(['/']) ?>"><i class="fa fa-home" style="cursor:pointer;"></i></a></li>
    <li style="cursor:wait;"><a>厂家商品模块</a></li>
    <li class="active" style="cursor:wait;">数据添加</li>
</ul>
<div class="wrapper">
    <form class="cmxform form-horizontal adminex-form" id="content-add-form" >
        <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>" />
        <input type="hidden" name="CommodityForm[number]" value="1"/>
        <input type="hidden" name="CommodityForm[singleplugs_dis]" value="1123"/>

        <div class="form-group ">
            <label class="control-label col-lg-2">标题</label>
            <div class="col-lg-10">
                <input class="form-control" type="text" name="CommodityForm[title]" cname="标题" required>
                <label class="help-block"></label>
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-lg-2">邮箱</label>
            <div class="col-lg-10">
                <input class="form-control" type="text" dtype="email" name="CommodityForm[email]" cname="邮箱" message="请输入正确的电子邮箱地址" required>
                <label class="help-block">xxx@163.com</label>
            </div>
        </div>
        <!--
        <div class="form-group ">
            <label class="control-label col-lg-2">URL (optional)</label>
            <div class="col-lg-10">
                <input class="form-control" type="url" name="url">
            </div>
        </div>
        -->
        <div class="form-group ">
            <label class="control-label col-lg-2">评论</label>
            <div class="col-lg-10">
                <textarea class="form-control" name="CommodityForm[remarks]" cname="评论" max-length="50" min-length="10" required></textarea>
                <label class="help-block">请输入10-50字的评论。</label>
            </div>
        </div>
        <!--
                <div class="form-group ">
                    <label class="control-label col-lg-2">开关选择</label>
                    <div class="col-lg-10">
                        <div>
                            <input type="checkbox" class="js-switch-blue" checked/>
                        </div>
                    </div>
                </div>
        -->
        <div class="form-group ">
            <label class="control-label col-lg-2">标签选择</label>
            <div class="col-lg-10">
                <input id="tags_1" type="text" class="tags" value="php,ios"   />
            </div>
        </div>

        <div class="form-group ">
            <label class="control-label col-lg-2">日期时间</label>
            <div class="col-lg-10">
                <div class="input-group date form_datetime-adv">
                    <input type="text" name="CommodityForm[discount_period]" class="form-control" value="<?= date("Y-m-d H:i"); ?>" style="width: 86%;">
                    <div class="input-group-btn" style="width: 12%;">
                        <!-- <div style="vertical-align:middle;">-->
                        <button type="button" class="btn btn-success date-set"><i class="fa fa-calendar"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group ">
            <label class="control-label col-lg-2">颜色选择</label>
            <div class="col-lg-10">
                <div data-color="#15573b" class="input-append colorpicker-default color">
                    <input type="text" readonly="" value="" name="CommodityForm[color]"  class="form-control" style="width: 28%;">
                    <span class=" input-group-btn add-on" style="width: 66%;">
                        <button class="btn btn-default" type="button" style="padding: 8px;float: left;">
                            <i></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>

        <div class="form-group ">
            <label class="control-label col-lg-2">品牌</label>
            <div class="col-lg-10">
                <select class="select2" name="CommodityForm[brand_id]" >
                    <?php foreach ($f_fatas as $k => $v) { ?>
                        <option value="<?= $k ?>"><?= $v ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="form-group ">
            <label class="control-label col-lg-2">系列</label>
            <div class="col-lg-10">
                <select class="select2_series_id" cname="系列" name="CommodityForm[series_idarr][]" multiple="multiple" required ></select>
                <label class="help-block">请选择系列</label>
            </div>
        </div>
        <!--
                <div class="form-group ">
                    <label class="control-label col-lg-2">单选|复选框</label>
                    <div class="col-lg-10 icheck">
                        <div class="square-blue">
                            <label><input type="checkbox"> Blue Checkbox </label>
                        </div>
        
                        <div class="square-blue">
                            <label><input type="checkbox"> Blue Checkbox </label>
                        </div>
        
                        <div class="square-blue">
                            <label><input type="radio" name="demo-radio"> Blue Radio </label>
                        </div>
        
                        <div class="square-blue">
                            <label><input type="radio" name="demo-radio"> Blue Radio </label>
                        </div>
        
                    </div>
                </div>
        -->
        <div class="form-group ">
            <label class="control-label col-lg-2">编辑器</label>
            <div class="col-lg-10 icheck">
                <textarea class="wysihtml5 form-control" rows="9" id="wysihtml5" name="CommodityForm[article_content]" ></textarea>

            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <a href="<?= Url::toRoute(['/user/default/addarticledata']) ?>" class="btn btn-success ajaxproxy" proxy='{"formId":"content-add-form", "method":"post"}'>提交保存</a>
            </div>
        </div>
    </form>
</div>
<footer class="sticky-footer">
    tj
</footer>



<!-- Placed js at the end of the document so the pages load faster -->
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/') ?>jquery-ui-1.9.2.custom.min.js"    type="text/javascript" charset="utf-8"  ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/') ?>jquery-migrate-1.2.1.min.js"    type="text/javascript" charset="utf-8"  ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/') ?>bootstrap.min.js"    type="text/javascript" charset="utf-8" ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/') ?>modernizr.min.js"    type="text/javascript" charset="utf-8"  ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/') ?>jquery.nicescroll.js"    type="text/javascript" charset="utf-8" ></script>
<!--easy pie chart-->
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/easypiechart/') ?>jquery.easypiechart.js"    type="text/javascript" charset="utf-8" ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/easypiechart/') ?>easypiechart-init.js"    type="text/javascript" charset="utf-8" ></script>
<!--Sparkline Chart-->
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/sparkline/') ?>jquery.sparkline.js"    type="text/javascript" charset="utf-8" ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/sparkline/') ?>sparkline-init.js"    type="text/javascript" charset="utf-8" ></script>
<!--icheck -->
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/iCheck/') ?>jquery.icheck.js"    type="text/javascript" charset="utf-8" ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/') ?>icheck-init.js"    type="text/javascript" charset="utf-8" ></script>
<!--Calendar-->
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/calendar/') ?>clndr.js"    type="text/javascript" charset="utf-8" ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/calendar/') ?>evnt.calendar.init.js"    type="text/javascript" charset="utf-8" ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/calendar/') ?>moment-2.2.1.js"    type="text/javascript" charset="utf-8" ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/calendar/') ?>underscore-min.js"    type="text/javascript" charset="utf-8" ></script>
<!--tags input  s--> 
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/jquery-tags-input/') ?>jquery.tagsinput.js"   charset="utf-8" type="text/javascript"   ></script>
<!-- tags input e-->
<!--ios7-->
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/ios-switch/') ?>switchery.js"    type="text/javascript" charset="utf-8" ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/ios-switch/') ?>ios-init.js"    type="text/javascript" charset="utf-8" ></script>
<!-- editor s-->
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/bootstrap-wysihtml5/') ?>wysihtml5-0.3.0.js"    type="text/javascript" charset="utf-8" ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/bootstrap-wysihtml5/') ?>bootstrap-wysihtml5.js"    type="text/javascript" charset="utf-8"  ></script>
<!-- editor e-->
<!--pickers plugins -->
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/bootstrap-datepicker/js/') ?>bootstrap-datepicker.js"    type="text/javascript" charset="utf-8"  ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/bootstrap-datetimepicker/js/') ?>bootstrap-datetimepicker.js"    type="text/javascript" charset="utf-8"  ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/bootstrap-daterangepicker/') ?>moment.min.js"    type="text/javascript" charset="utf-8"  ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/bootstrap-daterangepicker/') ?>daterangepicker.js"    type="text/javascript" charset="utf-8"  ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/bootstrap-colorpicker/js/') ?>bootstrap-colorpicker.js"    type="text/javascript" charset="utf-8"  ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/bootstrap-timepicker/js/') ?>bootstrap-timepicker.js"    type="text/javascript" charset="utf-8"  ></script>
<!-- select2 good-->
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/select2/') ?>select2.min.js"    type="text/javascript" charset="utf-8"  ></script>

<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/') ?>scripts.js"    type="text/javascript" charset="utf-8" ></script>
<!--Dashboard Charts-->
<!--
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/') ?>dashboard-chart-init.js"    type="text/javascript" charset="utf-8" ></script>
-->
<!-- app script plugins -->
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/ajaxupload/') ?>AjaxUpload.min.js"    type="text/javascript" charset="utf-8" ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/jdialog/') ?>JDialog.min.js"    type="text/javascript" charset="utf-8" ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/') ?>AjaxProxy.min.js"    type="text/javascript" charset="utf-8" ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/') ?>JForm.min.js"    type="text/javascript" charset="utf-8" ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/') ?>JTemplate.min.js"    type="text/javascript" charset="utf-8" ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/') ?>common.js"    type="text/javascript" charset="utf-8" ></script>



<script>
    var _csrf = '<?= Yii::$app->request->csrfToken ?>';
    $(document).ready(function () {
        //标签初始化
        $('#tags_1').tagsInput({width: "auto", defaultText: "添加标签"});
        //初始化日历选择
        $(".form_datetime-adv").datetimepicker({
            format: "yyyy-mm-dd hh:ii",
            autoclose: true,
            todayBtn: true,
            startDate: "2013-02-14 10:00",
            minuteStep: 5
        });

        //颜色选择器
        $('.colorpicker-default').colorpicker({
            format: 'hex'
        });

        //品牌   select2
        $(".select2").select2({
            width: '100%',
            //minimumResultsForSearch: Infinity, //不显示搜索库
            //allowClear: true     //删除所选
        });
        //选择系列 首次显示
        var html_series_id = $(".select2_series_id").select2({
            placeholder: "请先选择厂家", //默认提示语 
            width: '100%',
            //tags: true   //第一次选中后  还在， 再次选 去除
            //maximumSelectionLength: 2 //最多选2个
        });

        //开始 锁定系列加载
        $(".select2_series_id").prop("disabled", true);
        showLocation(html_series_id);

        //编辑器
        $('#wysihtml5').wysihtml5();

    });

</script>

<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/') ?>user_adddatas.js"    type="text/javascript" charset="utf-8" ></script>











