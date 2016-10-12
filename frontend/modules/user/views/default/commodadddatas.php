<?php

use yii\helpers\Url;
?>
<link href="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/css/') ?>style-custom.css" rel="stylesheet" type="text/css" />
<ul class="breadcrumb panel">
    <li><a><i class="fa fa-home"></i></a></li>
    <li><a>商品列表</a></li>
    <li class="active">添加数据</li>
</ul>
<div class="wrapper">
    <form class="cmxform form-horizontal adminex-form"  action="<?= Url::toRoute(['/user/default/addcommodtidydata']) ?>" method="post"  enctype="multipart/form-data">
        <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>" />
        <input type="hidden" name="CommodityForm[user_id]" value="3"/>

        <div class="form-group ">
            <label class="control-label col-lg-2">姓名</label>
            <div class="col-lg-10">
                <input class="form-control" type="text" name="CommodityForm[titie]" cname="姓名" required />
                <label class="help-block"></label>
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-lg-2">邮箱</label>
            <div class="col-lg-10">
                <input class="form-control" type="text" dtype="email" name="CommodityForm[email]" cname="邮箱" message="请输入正确的电子邮箱地址" required />
                <label class="help-block">xxx@163.com</label>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <a  class="btn btn-success ajaxproxy"  >提交保存</a>
            </div>
        </div>
    </form>
</div>
<footer class="sticky-footer">
    添加数据
</footer>



<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/') ?>jquery-ui-1.9.2.custom.min.js"    type="text/javascript" ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/') ?>bootstrap.min.js"    type="text/javascript" ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/') ?>jquery.nicescroll.js"    type="text/javascript" ></script>
<script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/') ?>scripts.js"    type="text/javascript" ></script>