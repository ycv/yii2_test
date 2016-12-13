<?php

use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
        <meta name="keywords" content="yanzi, bootstrap"/>
        <meta name="description" content=""/>
        <meta name="author" content="yanzi"/>

        <link rel="shortcut icon" href="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/images/') ?>/favicon.ico" type="image/x-icon">
        <title>燕子飞</title>
        <link href="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/css/') ?>style.css" rel="stylesheet" type="text/css" />

        <script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/') ?>jquery-1.7.1.min.js"    type="text/javascript" ></script>
        <script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/common/js/') ?>jquery_lzb_ext.js"    type="text/javascript" ></script>
        <script src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/js/') ?>user_ShoppingCart.js"    type="text/javascript" ></script>
        <script type="text/javascript">
            $(function () {
                //获取购物车商品个数
                GetProdInshopcart();
            });
        </script>
    </head>
    <body class="sticky-header">
        <!-- 购物车详情页面 -->
        <div id="pro_shoppingcartdetails" style="display: none;">
            <p id="CloseCartLockSrceen">aaaa!</p>
        </div>

        <div id="preloader">
            <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
        </div>
        <section>
            <div class="left-side sticky-left-side">
                <!--logo and iconic logo start-->
                <div class="logo">
                    <a href=""><img src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/images/') ?>logo.png" alt=""></a>
                </div>

                <div class="logo-icon text-center">
                    <a href=""><img src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/images/') ?>logo_icon.png" alt=""></a>
                </div>
                <!--logo and iconic logo end-->

                <div class="left-side-inner">

                    <!-- visible to small devices only -->
                    <div class="visible-xs hidden-sm hidden-md hidden-lg">
                        <div class="media logged-user">
                            <img alt="" src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/images/') ?>photos/user-avatar.png" class="media-object">
                            <div class="media-body">
                                <h4><a href="#">username</a></h4>
                                <span>user</span>
                            </div>
                        </div>

                        <h5 class="left-nav-title">{Account Information}</h5>
                        <ul class="nav nav-pills nav-stacked custom-nav">
                            <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                            <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                        </ul>
                    </div>

                    <!--sidebar nav start-->
                    <ul class="nav nav-pills nav-stacked custom-nav">
                        <li class="active"><a href=""><i class="fa fa-home"></i> <span>首页</span></a></li>
                        <li class="menu-list"><a href=""><i class="fa fa-laptop"></i> <span>个人信息</span></a>
                            <ul class="sub-menu-list">
                                <li><a href="">空白页面</a></li>
                                <li><a href="">数据列表</a></li>
                                <li><a href="">数据添加</a></li>
                                <li><a href="">数据修改</a></li>
                                <li><a href="">登陆页面</a></li>

                            </ul>
                        </li>
                        <li class="menu-list"><a href=""><i class="fa fa-book"></i> <span>UI Elements</span></a>
                            <ul class="sub-menu-list">
                                <li><a href="general.html"> General</a></li>
                                <li><a href="buttons.html"> Buttons</a></li>
                                <li><a href="tabs-accordions.html"> Tabs & Accordions</a></li>
                                <li><a href="typography.html"> Typography</a></li>
                                <li><a href="slider.html"> Slider</a></li>
                                <li><a href="panels.html"> Panels</a></li>
                            </ul>
                        </li>
                        <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>厂家商品模块</span></a>
                            <ul class="sub-menu-list">
                                <li><a href="<?= Url::toRoute(['/user/default/listdatas']) ?>"> 商品列表</a></li>
                                <li><a href="<?= Url::toRoute(['/user/default/addlistsdata']) ?>">商品添加</a></li>
                                <li><a href="calendar.html">calendar</a></li>
                                <li><a href="tree_view.html">tree_view</a></li>
                                <li><a href="nestable.html"> Nestable</a></li>

                            </ul>
                        </li>

                        <li><a href="fontawesome.html"><i class="fa fa-bullhorn"></i> <span>Fontawesome</span></a></li>

                        <li class="menu-list"><a href=""><i class="fa fa-envelope"></i> <span>Mail</span></a>
                            <ul class="sub-menu-list">
                                <li><a href="mail.html"> Inbox</a></li>
                                <li><a href="mail_compose.html"> Compose Mail</a></li>
                                <li><a href="mail_view.html"> View Mail</a></li>
                            </ul>
                        </li>

                        <li class="menu-list"><a href=""><i class="fa fa-tasks"></i> <span>Forms</span></a>
                            <ul class="sub-menu-list">
                                <li><a href="form_layouts.html"> Form Layouts</a></li>
                                <li><a href="form_advanced_components.html"> Advanced Components</a></li>
                                <li><a href="form_wizard.html"> Form Wizards</a></li>
                                <li><a href="form_validation.html"> Form Validation</a></li>
                                <li><a href="editors.html"> Editors</a></li>
                                <li><a href="inline_editors.html"> Inline Editors</a></li>
                                <li><a href="pickers.html"> Pickers</a></li>
                                <li><a href="dropzone.html"> Dropzone</a></li>
                                <li><a href="http://www.weidea.net"> More</a></li>
                            </ul>
                        </li>
                        <li class="menu-list"><a href=""><i class="fa fa-bar-chart-o"></i> <span>Charts</span></a>
                            <ul class="sub-menu-list">
                                <li><a href="flot_chart.html"> Flot Charts</a></li>
                                <li><a href="morris.html"> Morris Charts</a></li>
                                <li><a href="chartjs.html"> Chartjs</a></li>
                                <li><a href="c3chart.html"> C3 Charts</a></li>
                            </ul>
                        </li>
                        <li class="menu-list"><a href="#"><i class="fa fa-th-list"></i> <span>Data Tables</span></a>
                            <ul class="sub-menu-list">
                                <li><a href="basic_table.html"> Basic Table</a></li>
                                <li><a href="dynamic_table.html"> Advanced Table</a></li>
                                <li><a href="responsive_table.html"> Responsive Table</a></li>
                                <li><a href="editable_table.html"> Edit Table</a></li>
                            </ul>
                        </li>

                        <li class="menu-list"><a href="#"><i class="fa fa-map-marker"></i> <span>Maps</span></a>
                            <ul class="sub-menu-list">
                                <li><a href="google_map.html"> Google Map</a></li>
                                <li><a href="vector_map.html"> Vector Map</a></li>
                            </ul>
                        </li>
                        <li class="menu-list"><a href=""><i class="fa fa-file-text"></i> <span>Extra Pages</span></a>
                            <ul class="sub-menu-list">
                                <li><a href="profile.html"> Profile</a></li>
                                <li><a href="invoice.html"> Invoice</a></li>
                                <li><a href="pricing_table.html"> Pricing Table</a></li>
                                <li><a href="timeline.html"> Timeline</a></li>
                                <li><a href="blog_list.html"> Blog List</a></li>
                                <li><a href="blog_details.html"> Blog Details</a></li>
                                <li><a href="directory.html"> Directory </a></li>
                                <li><a href="chat.html"> Chat </a></li>
                                <li><a href="404.html"> 404 Error</a></li>
                                <li><a href="500.html"> 500 Error</a></li>
                                <li><a href="registration.html"> Registration Page</a></li>
                                <li><a href="lock_screen.html"> Lockscreen </a></li>
                            </ul>
                        </li>
                        <li><a href="login.html"><i class="fa fa-sign-in"></i> <span>Login Page</span></a></li>

                    </ul>
                    <!--sidebar nav end-->
                </div>
            </div>
            <div class="main-content" >
                <div class="header-section">
                    <!--toggle button start-->
                    <a class="toggle-btn"><i class="fa fa-bars"></i></a>
                    <!--toggle button end-->

                    <!--page title start-->
                    <div class="page-title" style="float: left; height: 50px;line-height: 50px;">
                        <span style="font-size:24px;">xxx</span>
                    </div>
                    <!--page title end-->   

                    <!--notification menu start -->
                    <div class="menu-right" style="float: right;">
                        <ul class="notification-menu">
                            <li>
                                <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                                    <i class="fa fa-tasks"></i>
                                    <span class="badge">8</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-head pull-right">
                                    <h5 class="title">You have 8 pending task</h5>
                                    <ul class="dropdown-list user-list">
                                        <li class="new">
                                            <a href="#">
                                                <div class="task-info">
                                                    <div>Database update</div>
                                                </div>
                                                <div class="progress progress-striped">
                                                    <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
                                                        <span class="">40%</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="new">
                                            <a href="#">
                                                <div class="task-info">
                                                    <div>Dashboard done</div>
                                                </div>
                                                <div class="progress progress-striped">
                                                    <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success">
                                                        <span class="">90%</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="task-info">
                                                    <div>Web Development</div>
                                                </div>
                                                <div class="progress progress-striped">
                                                    <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-info">
                                                        <span class="">66% </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="task-info">
                                                    <div>Mobile App</div>
                                                </div>
                                                <div class="progress progress-striped">
                                                    <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="33" role="progressbar" class="progress-bar progress-bar-danger">
                                                        <span class="">33% </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="task-info">
                                                    <div>Issues fixed</div>
                                                </div>
                                                <div class="progress progress-striped">
                                                    <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar">
                                                        <span class="">80% </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="new"><a href="">See All Pending Task</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge">5</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-head pull-right">
                                    <h5 class="title">You have 5 Mails </h5>
                                    <ul class="dropdown-list normal-list">
                                        <li class="new">
                                            <a href="">
                                                <span class="thumb"><img src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/images/') ?>photos/user1.png" alt="" /></span>
                                                <span class="desc">
                                                    <span class="name">John Doe <span class="badge badge-success">new</span></span>
                                                    <span class="msg">Lorem ipsum dolor sit amet...</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span class="thumb"><img src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/images/') ?>photos/user2.png" alt="" /></span>
                                                <span class="desc">
                                                    <span class="name">Jonathan Smith</span>
                                                    <span class="msg">Lorem ipsum dolor sit amet...</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span class="thumb"><img src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/images/') ?>photos/user3.png" alt="" /></span>
                                                <span class="desc">
                                                    <span class="name">Jane Doe</span>
                                                    <span class="msg">Lorem ipsum dolor sit amet...</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span class="thumb"><img src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/images/') ?>photos/user4.png" alt="" /></span>
                                                <span class="desc">
                                                    <span class="name">Mark Henry</span>
                                                    <span class="msg">Lorem ipsum dolor sit amet...</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span class="thumb"><img src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/images/') ?>photos/user5.png" alt="" /></span>
                                                <span class="desc">
                                                    <span class="name">Jim Doe</span>
                                                    <span class="msg">Lorem ipsum dolor sit amet...</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="new"><a href="">Read All Mails</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="badge">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-head pull-right">
                                    <h5 class="title">Notifications</h5>
                                    <ul class="dropdown-list normal-list">
                                        <li class="new">
                                            <a href="">
                                                <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                                <span class="name">Server #1 overloaded.  </span>
                                                <em class="small">34 mins</em>
                                            </a>
                                        </li>
                                        <li class="new">
                                            <a href="">
                                                <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                                <span class="name">Server #3 overloaded.  </span>
                                                <em class="small">1 hrs</em>
                                            </a>
                                        </li>
                                        <li class="new">
                                            <a href="">
                                                <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                                <span class="name">Server #5 overloaded.  </span>
                                                <em class="small">4 hrs</em>
                                            </a>
                                        </li>
                                        <li class="new">
                                            <a href="">
                                                <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                                <span class="name">Server #31 overloaded.  </span>
                                                <em class="small">4 hrs</em>
                                            </a>
                                        </li>
                                        <li class="new"><a href="">See All Notifications</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- 购物车 -->
                            <li id="proshopcartNum_li">
                                <a class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="badge" id="proshopcartNum"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?= Yii::$app->request->hostInfo ?><?= Yii::getAlias('@web/statics/user/images/') ?>photos/user-avatar.png" alt="" />
                                    John Doe
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                    <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                                    <li><a href="#"><i class="fa fa-cog"></i>  Settings</a></li>
                                    <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!--notification menu end -->
                </div>
                <?= $content; ?>
            </div>
        </section>
    </body>
</html>