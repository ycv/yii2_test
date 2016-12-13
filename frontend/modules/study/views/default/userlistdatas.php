<?php

use yii\helpers\Url;
?>
<div class="col-sm-9 col-md-10 main">
    <!-- 载入左侧菜单指向的php（或html等）页面内容 -->
    <div id="content_prolistdatas" >
        <div class="row">
            <section>
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="page-header">
                        <h2>Tab example</h2>
                    </div>

                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#info-tab" data-toggle="tab">Information <i class="fa"></i></a></li>
                        <li><a href="#address-tab" data-toggle="tab">Address <i class="fa"></i></a></li>
                    </ul>

                    <form id="accountForm" method="post" class="form-horizontal" action="target.php" style="margin-top: 20px;">
                        <div class="tab-content">
                            <div class="tab-pane active" id="info-tab">
                                <a>bbbbbbbbbbbbbb</a>
                            </div>
                            <div class="tab-pane" id="address-tab">
                                <a>ssssssssssssssssss</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-5 col-lg-offset-3">
                                <button type="submit" class="btn btn-primary">Validate</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>  
</div>


<script type="text/javascript">
    includejspath(basepath + "/statics/common/js/jquery.alerts.min.js?v=" + version_number + "|" + basepath + "/statics/study/js/userlistdatas.js?v=" + version_number + "");
</script>