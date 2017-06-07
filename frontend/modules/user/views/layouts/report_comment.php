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
        <!--引用js-->
        <?= Html::jsFile('@web/statics/common/js/jquery-1.8.3.min.js') ?>
        <?= Html::jsFile('@web/statics/common/js/reportother.js') ?>
    </head>
    <script type="text/javascript">
        var basepath = '<?= Yii::$app->request->hostInfo ?>';
        var _csrf_frontend = '<?= Yii::$app->request->csrfToken ?>';
    </script>
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
                            <li class="<?= Yii::$app->controller->action->id == 'reportprojectlist' ? 'thisli' : '' ?>" id="report_list_reportprojectlist">
                                <a href="<?= Url::toRoute(['/user/report/reportprojectlist']) ?>"><em>项目跟踪报表</em><i></i></a>
                            </li>
                            <li>
                                <a style="cursor:pointer;"><em>项目统计</em><i>Count</i></a>
                            </li>
                            <li class="<?= Yii::$app->controller->action->id == 'projectreport' ? 'thisli' : '' ?>" id="report_list_projectreport" >
                                <a style="cursor:pointer;"><em>top10目录</em><i></i></a>
                            </li>
                            <li>
                                <a style="cursor:pointer;"><em>Top10明细</em><i></i></a>
                            </li>
                            <li>
                                <a style="cursor:pointer;"><em>KA明细</em><i>Detailed</i></a>
                            </li>
                            <li>
                                <a style="cursor:pointer;"><em>行业报表明细</em><i></i></a>
                            </li>
                            <li>
                                <a style="cursor:pointer;"><em>Top10汇总</em><i></i></a>
                            </li>
                            <li>
                                <a style="cursor:pointer;"><em>项目数据检查</em><i></i></a>
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
        <div class="report_trackingDIV">
            <?= $content; ?>
        </div>
        <!--/数据内容-->








    </body>
</html>
<?php $this->endPage() ?>
