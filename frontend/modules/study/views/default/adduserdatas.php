<?php

use yii\helpers\Url;
?>
<style>
    #popup_container {font-family: Arial, sans-serif;font-size: 12px;min-width: 300px;max-width: 600px;background:#FFF;border:solid 5px #999;color:#000;-moz-border-radius:5px;-webkit-border-radius: 5px;border-radius: 5px;}
    #popup_title {font-size:14px;font-weight:bold;text-align:center;line-height:1.75em;color:#666; border: solid 1px #FFF;border-bottom: solid 1px #999;cursor: default;padding:0em;margin:0em auto;}
    #popup_content {padding: 1em 1.75em;margin: 0em;}
    #popup_message {padding-left: 48px;}
    #popup_panel {text-align: center;margin:1em 0em 0em 1em;}
</style>
<div class="col-sm-9 col-md-10 main">
    <!-- 载入左侧菜单指向的php（或html等）页面内容 -->
    <div id="content_userlistdatas">
        <h4>    				
        </h4>         						
        <form id="adduserdatas" method="post" class="form-horizontal" role="form" action="<?= Url::toRoute(['/study/default/adduserdatas']) ?>" >
            <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
            <div class="form-group"> 
                <label class="col-sm-2 control-label">名字</label> 
                <div class="col-sm-7">
                    <!-- autocomplete="off" 关闭快捷提示；名字不能重复-->
                    <input type="text" class="form-control" name="AdduserForm[username]" placeholder="请输入名字" autocomplete="off" />
                </div>
            </div>
            <div class="form-group"> 
                <label class="col-sm-2 control-label">邮箱</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="AdduserForm[useremail]" placeholder="请输入邮箱" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">性别</label>
                <div class="col-sm-7">
                    <label class="checkbox-inline">
                        <input type="radio" name="AdduserForm[usersex]" value="1" /> 男
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" name="AdduserForm[usersex]" value="2" /> 女
                    </label>
                </div>
            </div>
            <div class="form-group"> 
                <label class="col-sm-2 control-label">兴趣爱好</label>
                <div class="col-sm-7">
                    <label class="checkbox-inline"> 
                        <input type="checkbox" name="AdduserForm[userInterest][]" value="游泳" />游泳
                    </label> 
                    <label class="checkbox-inline"> 
                        <input type="checkbox" name="AdduserForm[userInterest][]" value="唱歌" />唱歌
                    </label> 
                    <label class="checkbox-inline"> 
                        <input type="checkbox" name="AdduserForm[userInterest][]" value="篮球" />篮球
                    </label>
                    <label class="checkbox-inline"> 
                        <input type="checkbox" name="AdduserForm[userInterest][]" value="爬山" />爬山
                    </label>
                    <label class="checkbox-inline"> 
                        <input type="checkbox" name="AdduserForm[userInterest][]" value="看书" />看书
                    </label> 
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">地址</label>

                <div class="col-sm-7  bs-chinese-region flat dropdown" data-min-level="1" data-max-level="3" data-def-val="[name=AdduserForm_address]" >
                    <input type="text" class="form-control" id="AdduserForm_address"   placeholder="选择你的地址" data-toggle="dropdown" readonly=""    name="validate__address"    />
                    <input type="hidden" class="form-control" name="AdduserForm_address" value="" >
                    <div class="dropdown-menu" role="menu" aria-labelledby="dLabel" >
                        <div>
                            <ul class="nav nav-tabs" role="tablist" >
                                <li role="presentation" class="active"><a href="#province" data-next="city" role="tab" data-toggle="tab">省份</a></li>
                                <li role="presentation"><a href="#city" data-next="district" role="tab" data-toggle="tab">城市</a></li>
                                <li role="presentation" id="data_xianxu" ><a href="#district" data-next="street" role="tab" data-toggle="tab">县区</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="province">--</div>
                                <div role="tabpanel" class="tab-pane" id="city"><h4 style="color: #337ab7;cursor:help;">请先选择省份!</h4></div>
                                <div role="tabpanel" class="tab-pane" id="district" >--</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" id="captchaOperation"></label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="captcha"  autocomplete="off" />
                </div>
            </div>

            <!--
            <div class="form-group"> 
                <label for="lastname" class="col-sm-2 control-label">公司</label> 
                <div class="col-sm-7"> 
                    <input type="text" class="form-control" id="lastname" placeholder="请输入姓">
                </div> 
            </div> 

            <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10"> 
                    <div class="checkbox"> 
                        <label> 
                            <input type="checkbox">请记住我 
                        </label> 
                    </div> 
                </div> 
            </div>
            -->
            <br>
            <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3">
                    <button type="submit" class="btn btn-success" id="datassubmit">提交</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-warning" id="resetBtn">重置</button>
                </div>
            </div>
        </form>
    </div>  
</div>
<script type="text/javascript">
    //加载js
    //includejspath(basepath + "/statics/common/js/bootstrapValidator.min.js?v=" + version_number + "|" + basepath + "/statics/common/js/jquery.alerts.min.js?v=" + version_number + "|" + basepath + "/statics/study/js/adduserdatas.js?v=" + version_number + "|" + basepath + "/statics/common/js/bootstrap-chinese-region.min.js?v=" + version_number + "");

    includejspath(basepath + "/statics/common/js/bootstrap-formValidation_lzb/formValidation.min.js?v=" + version_number + "|" + basepath + "/statics/common/js/bootstrap-formValidation_lzb/bootstrap.min.js?v=" + version_number + "|" + basepath + "/statics/common/js/jquery.alerts.min.js?v=" + version_number + "|" + basepath + "/statics/study/js/adduserdatas.js?v=" + version_number + "|" + basepath + "/statics/common/js/bootstrap-chinese-region.min.js?v=" + version_number + "");

    //动态加载 CSS 文件
    study_dynamicLoading.css(basepath + "/statics/common/css/bootstrap-chinese-region.min.css?v=" + version_number);
    study_dynamicLoading.css(basepath + "/statics/common/js/bootstrap-formValidation_lzb/formValidation.min.css?v=" + version_number);


</script>