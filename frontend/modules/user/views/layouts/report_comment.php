<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html  lang="<?= Yii::$app->language ?>">
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="<?= Yii::$app->charset ?>"/>
        <title><?= Html::encode($this->title) ?></title>
        <!--引用css-->
        <?= Html::cssFile('@web/statics/common/css/report_base.css') ?>
    </head>
    <body>
        <!--头部菜单-->
        <div class="top">
            <div class="w t_cen">
                <div class="t_c_logo"><a href="index.html"><img src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/images/') ?>logo.png" /></a></div>
                <div class="t_c_lr t_c_left"></div>
                <div class="t_c_cen">
                    <div class="t_c_top">
                    </div>
                    <div class="t_c_bottom">
                        <ul>
                            <li class="thisli">
                                <a href="#"><em>官方首页</em><i>Home</i></a>
                            </li>
                            <li>
                                <a href="#"><em>集团概况</em><i>About Us</i></a>
                                <div class="Nodes">
                                    <img src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/images/') ?>menu_top.png" />
                                    <ul>
                                        <li><a href="#">公司简介</a></li>
                                        <li><a href="#">总部扶持</a></li>
                                        <li><a href="#">服务团队</a></li>
                                    </ul>
                                    <img src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/images/') ?>menu_bottom.png" />
                                </div>
                            </li>
                            <li>
                                <a href="#"><em>品牌中心</em><i>Brand</i></a>
                                <div class="Nodes">
                                    <img src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/images/') ?>menu_top.png" />
                                    <ul>
                                        <li><a href="#">品牌文化</a></li>
                                        <li><a href="#">市场前景</a></li>
                                        <li><a href="#">品牌形象</a></li>
                                        <li><a href="#">店面形象</a></li>
                                    </ul>
                                    <img src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/images/') ?>menu_bottom.png" />
                                </div>
                            </li>
                            <li>
                                <a href="#"><em>产品中心</em><i>Product </i></a>
                                <div class="Nodes">
                                    <img src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/images/') ?>menu_top.png" />
                                    <ul>
                                        <li><a href="#">产品案例</a></li>
                                        <li><a href="#">核心产品</a></li>
                                        <li><a href="#">主流产品</a></li>
                                    </ul>
                                    <img src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/images/') ?>menu_bottom.png" />
                                </div>
                            </li>
                            <li>
                                <a href="#"><em>项目优势</em><i>Advantages</i></a>
                                <div class="Nodes">
                                    <img src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/images/') ?>menu_top.png" />
                                    <ul>
                                        <li><a href="#">产品优势</a></li>
                                        <li><a href="#">投资优势</a></li>
                                        <li><a href="#">店面优势</a></li>
                                        <li><a href="#">总部优势</a></li>
                                    </ul>
                                    <img src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/images/') ?>menu_bottom.png" />
                                </div>
                            </li>
                            <li>
                                <a href="#"><em>加盟我们</em><i>Join Us</i></a>
                                <div class="Nodes">
                                    <img src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/images/') ?>menu_top.png" />
                                    <ul>
                                        <li><a href="#">加盟模式</a></li>
                                        <li><a href="#">加盟流程</a></li>
                                        <li><a href="#">成功案例</a></li>
                                    </ul>
                                    <img src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/images/') ?>menu_bottom.png" />
                                </div>
                            </li>
                            <li>
                                <a href="#"><em>新闻中心</em><i>News</i></a>
                                <div class="Nodes">
                                    <img src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/images/') ?>menu_top.png"/>
                                    <ul>
                                        <li><a href="#">品牌新闻</a></li>
                                        <li><a href="#">行业新闻</a></li>
                                    </ul>
                                    <img src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/images/') ?>menu_bottom.png" />
                                </div>
                            </li>
                            <li>
                                <a href="#"><em>联系我们</em><i>Contact</i></a>
                            </li>
                        </ul>
                        <div class="thisMenu" id="thisMenu"></div>
                    </div>
                </div>
                <div class="t_c_lr t_c_right"></div>
            </div>
        </div>
        <!--/头部菜单-->




        <!--数据内容-->
        <?= $content; ?>
        <!--/数据内容-->







        <!--引用js-->
        <?= Html::jsFile('@web/statics/common/js/jquery-1.8.3.min.js') ?>
        <?= Html::jsFile('@web/statics/common/js/reportother.js') ?>
    </body>
</html>
<?php $this->endPage() ?>
