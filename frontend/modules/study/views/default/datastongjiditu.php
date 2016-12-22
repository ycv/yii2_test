<?php

use yii\helpers\Url;
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <!-- 载入左侧菜单指向的php（或html等）页面内容 -->
    <div>
        <h4>
            <?= $demod; ?>
        </h4>         						
    </div>  
</div>

<script type="text/javascript">
    //加载js
    includejspath(basepath + "/statics/study/js/datastongjiditu.js?v=" + version_number);
    /*
     //加载js
     includejspath(basepath + "/statics/common/js/bootstrap-formValidation_lzb/formValidation.min.js?v=" + version_number + "|" + basepath + "/statics/common/js/bootstrap-formValidation_lzb/bootstrap.min.js?v=" + version_number + "|" + basepath + "/statics/common/js/jquery.alerts.min.js?v=" + version_number + "|" + basepath + "/statics/study/js/adduserdatas.js?v=" + version_number + "|" + basepath + "/statics/common/js/bootstrap-chinese-region.min.js?v=" + version_number + "");
     //动态加载 CSS 文件
     study_dynamicLoading.css(basepath + "/statics/common/css/bootstrap-chinese-region.min.css?v=" + version_number);
     study_dynamicLoading.css(basepath + "/statics/common/js/bootstrap-formValidation_lzb/formValidation.min.css?v=" + version_number);
     */
</script>