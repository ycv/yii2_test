<?php

use yii\helpers\Url;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- 在IE运行最新的渲染模式-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">  
        <!-- 初始化移动浏览显示 -->
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <meta name="Author" content="Dreamer-1.">
        <link rel="shortcut icon" href="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/images/') ?>favicon.ico" type="image/x-icon">

        <script type="text/javascript">
            var basepath = "<?= Yii::$app->request->hostInfo ?>";
            var version_number = "study201602212575";

            //加载模块
            var study_moudle = "<?= Yii::$app->controller->action->id ?>";
            (function () {
                /*引入各种CSS样式表*/
                document.write('<link' + ' type="text/css" rel="styleSheet" href="' + basepath + '/statics/common/css/bootstrap-lzb.min.css?v=' + version_number + '"' + ' />');
                //document.write('<link' + ' type="text/css" rel="styleSheet" href="' + basepath + '/statics/common/css/bootstrap.min.css?v=' + version_number + '"' + ' />');
                document.write('<link' + ' type="text/css" rel="styleSheet" href="' + basepath + '/statics/common/css/font-awesome.min.css?v=' + version_number + '"' + ' />');
                /*修改自Bootstrap官方Demon，你可以按自己的喜好制定CSS样式*/
                document.write('<link' + ' type="text/css" rel="styleSheet" href="' + basepath + '/statics/study/css/index.css?v=' + version_number + '"' + ' />');
                /*将默认字体从宋体换成微软雅黑（个人比较喜欢微软雅黑，移动端和桌面端显示效果比较接近）*/
                document.write('<link' + ' type="text/css" rel="styleSheet" href="' + basepath + '/statics/common/css/font-change.min.css?v=' + version_number + '"' + ' />');
                document.write('<link' + ' type="text/css" rel="styleSheet" href="' + basepath + '/statics/study/css/studymain.css?v=' + version_number + '"' + ' />');

                document.write('<scr' + 'ipt type="text/javascript" src="' + basepath + '/statics/common/js/jquery-1.12.3.min.js?v=' + version_number + '"></scr' + 'ipt>');
                document.write('<scr' + 'ipt type="text/javascript" src="' + basepath + '/statics/common/js/bootstrap.min.js?v=' + version_number + '"></scr' + 'ipt>');
                document.write('<scr' + 'ipt type="text/javascript" src="' + basepath + '/statics/study/js/main.min.js?v=' + version_number + '"></scr' + 'ipt>');


                /*html5shiv：用于解决IE9以下版本浏览器对HTML5新增标签不识别，并导致CSS不起作用的问题。*/
                document.write('<scr' + 'ipt type="text/javascript" src="' + basepath + '/statics/common/js/html5shiv.min.js?v=' + version_number + '"></scr' + 'ipt>');
            })();


        </script>



        <title>Demo</title>
    </head>

    <body>
        <!-- 顶部菜单（来自bootstrap官方Demon）==================================== -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= Url::toRoute(['/study/default/index']) ?>">Demo</a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">			            
                    <li><a   class="infi__sethands" onclick="showAtRight('userList.php')"><i class="fa fa-users"></i> 用户列表a</a></li>	
                    <li><a   class="infi__sethands" onclick="showAtRight('productList.php')"><i class="fa fa-list-alt"></i> 产品列表b</a></li>
                    <li><a   class="infi__sethands" onclick="showAtRight('recordList.php')" ><i class="fa fa-list"></i> 订单列表</a></li>	
                </ul>

            </div>
        </div>
    </nav>

    <!-- 左侧菜单选项========================================= -->
    <div class="container-fluid">
        <div class="row-fluie">
            <div class="col-sm-3 col-md-2 sidebar">		
                <ul class="nav nav-sidebar">
                    <!-- 一级菜单 -->
                    <li class="active" data1="left-yhgl" data2="" data3="" >
                        <a href="#userMeun" class="nav-header menu-first collapsed" data-toggle="collapse">
                            <i class="fa fa-user"></i>&nbsp; 用户管理 <span class="sr-only">(current)</span>
                        </a>
                    </li> 
                    <!-- 二级菜单 -->
                    <!-- 注意一级菜单中<a>标签内的href="#……"里面的内容要与二级菜单中<ul>标签内的id="……"里面的内容一致 -->
                    <ul id="userMeun" class="nav nav-list collapse menu-second" data4="erjibiaoqian" >
                        <li data2="left-yhgl" data3="userlistdatas" >
                            <a class="studt-left-a-bianshou" ><i class="fa fa-list"></i> 用户列表</a>
                        </li>
                        <!-- <li><a class="studt-left-a-bianshou" onclick="showAtRightNonstatic('userlistdatas', this)"><i class="fa fa-list"></i> 用户列表</a></li>  -->
                        <li data2="left-yhgl" data3="adduserdatas">
                            <a class="studt-left-a-bianshou" ><i class="fa fa-users"></i> 添加用户</a>
                        </li> 
                    </ul>

                    <li data1="left-cpgl" data2="" data3="" >
                        <a href="#productMeun" class="nav-header menu-first collapsed" data-toggle="collapse">
                            <i class="fa fa-globe"></i>&nbsp; 产品管理 <span class="sr-only">(current)</span></a>
                    </li> 
                    <ul id="productMeun" class="nav nav-list collapse menu-second" data4="erjibiaoqian" >
                        <li data2="left-cpgl" data3="addprodatas" ><a class="studt-left-a-bianshou" ><i class="fa fa-list-alt"></i> 添加产品</a></li>
                        <li data2="left-cpgl" data3="prolistdatas" ><a class="studt-left-a-bianshou" ><i class="fa fa-list-alt"></i> 产品列表</a></li>
                    </ul>

                    <li><a href="#recordMeun" class="nav-header menu-first collapsed" data-toggle="collapse">
                            <i class="fa fa-file-text"></i>&nbsp; 订单管理 <span class="sr-only">(current)</span></a>
                    </li> 
                    <ul id="recordMeun" class="nav nav-list collapse menu-second" data4="erjibiaoqian" >
                        <li><a  onclick="showAtRight('recordList.php', this)" ><i class="fa fa-list"></i> 订单列表</a></li>
                    </ul>

                </ul>

            </div>
        </div>
    </div>

    <!-- 右侧内容展示==================================================   -->   
    <?= $content; ?>

</body>
</html>