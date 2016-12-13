$.getJSON(basepath + '/factorydata/citiesdatas/sql_areas.json', function (data) {
    for (var i = 0; i < data.length; i++) {
        var area = {id: data[i].id, name: data[i].cname, level: data[i].level, parentId: data[i].upid};
        data[i] = area;
    }

    $('.bs-chinese-region').chineseRegion('source', data).on('completed.bs.chinese-region', function (e, areas) {
        //$(this).find('[name=AdduserForm_address]').val(areas[areas.length - 1].id);
        $(this).find('[name=AdduserForm_address]').val(areas[0].name + "," + areas[1].name + "," + areas[2].name);
    });
});


$(function () {
    $("#dright_content").html("&nbsp;&nbsp;&nbsp;用户添加");
    $("#data_xianxu").click(function () {
        var city_is_cheaked = 0;
        if ($("#city").children("a").length > 0) {
            $("#city").children("a").each(function () {
                if ($(this).hasClass("current")) {
                    city_is_cheaked = 1;
                    /**
                     return false;——跳出所有循环；相当于 javascript 中的 break 效果。
                     return true;——跳出当前循环，进入下一个循环；相当于 javascript 中的 continue 效果
                     */
                    return false;
                }
            });
        }
        if (0 == city_is_cheaked) {
            $("#district").html('<h4 style="color: #337ab7;cursor:help;">请先选择城市!</h4>');
        }
    });


    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }

    function generateCaptcha() {
        $('#captchaOperation').html([randomNumber(1, 20), '+', randomNumber(20, 30), '='].join(' '));
    }
    generateCaptcha();

    /*解决：只有首次点击提交，会重复提交两次，而接下来重新输入用户名后，就单次提交了 */
    /*       */


    /*插件初始化*/
    $('#adduserdatas').formValidation({
        /*绑定 提交表单验证*/
        //live: 'disabled',
        message: 'This value is not valid',
        icon: {/*输入框不同状态；显示图片的样式*/
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {/*验证  规则*/
            'AdduserForm[username]': {
                //threshold: 3,//长度超过3个字符 才传递到后台；  有点问题
                validators: {
                    notEmpty: {/*非空提示*/
                        message: '名字不能为空!'
                    },
                    stringLength: {/*长度提示*/
                        min: 6,
                        max: 15,
                        message: '用户名必须超过6，不超过15个字符'
                    },
                    remote: {//ajax验证。server result:{"valid",true or false} 向服务发送当前input name值，获得一个json数据。例表示正确：{"valid",true}  
                        type: 'POST', //请求方式
                        url: basepath + "/study/default/addusernameisexists", //验证地址
                        delay: 1000, //每输入一个字符，就发ajax请求，服务器压力还是太大，设置2秒发送一次ajax（默认输入一个字符，提交一次，服务器压力太大）
                        message: '用户已存在', //提示消息
                        data: {
                            _csrf: $("input[name='_csrf']").val()
                        } //参数 ；可以不使用data属性，框架将自动读取需要被验证到属性名称和值组成json格式到数据
                    }
                    /*
                     regexp: {//正则验证
                     regexp: /^[a-zA-Z0-9_\.]+$/,
                     message: '用户名只能由字母、数字、数字和下划线组成'
                     },
                     */

                }
            },
            'AdduserForm[useremail]': {
                validators: {
                    notEmpty: {
                        message: '邮箱不能为空!'
                    },
                    emailAddress: {
                        message: '请填写正确邮箱格式!'
                    }
                }
            },
            'AdduserForm[usersex]': {
                validators: {
                    notEmpty: {
                        message: '请选择性别!'
                    }
                }
            },
            'validate__address': {
                validators: {
                    callback: {
                        message: '请选择地址到县区级!',
                        callback: function (value) {
                            var validate__re = /[\s]/g;
                            var validate__num = 0;
                            if (validate__re.test(value)) {
                                //字符串中空格的个数
                                validate__num = value.match(validate__re).length;
                            }
                            return 3 == validate__num;
                        }
                    }
                }
            },
            'AdduserForm[userInterest][]': {
                validators: {
                    notEmpty: {
                        message: '请选择一个兴趣爱好!'
                    }
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: '答案错误!',
                        callback: function (value, validator) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            }
        }
    }).on('err.form.fv', function (e) {
        /*提交失败*/
        /*防止表单提交*/
        e.preventDefault();
        var $form = $(e.target), bv = $form.data('formValidation');
        if (!bv.isValidField('captcha')) {
            generateCaptcha();
        }
    }).on('status.field.fv', function (e, data) {}).on('success.form.fv', function (e) {
        /*防止表单提交*/
        e.preventDefault();
        //获取表单实例
        var $form = $(e.target);
        //得到formValidation实例
        var bv = $form.data('formValidation');
        //表单验证通过
        if (bv.isValidField('AdduserForm[usersex]') && bv.isValidField('AdduserForm[userInterest][]') && bv.isValidField('validate__address') && bv.isValidField('captcha')) {
            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function (result) {
                $('#datassubmit').attr("disabled", "disabled");
                $('#resetBtn').attr("disabled", "disabled");
                if (result.retval) {
                    jAlert('添加数据成功！请稍等...', '警告对话框');
                    setTimeout(function () {
                        $("#popup_ok").click();
                        $("li[data3='userlistdatas']").click();
                    }, 1500);

                } else {
                    jAlert('添加数据有误！请稍等...', '警告对话框');
                    setTimeout(function () {
                        $("#popup_ok").click();
                        window.location.reload();
                    }, 1500);
                }
            }, 'json');
        }
    }).find('div[aria-labelledby="dLabel"]').click(function () {
        //事件出发 字段验证
        $('#adduserdatas').data('formValidation').revalidateField('validate__address');
        //也可以这样写：
        //$('#adduserdatas').formValidation('revalidateField', 'validate__address');

    });


    $('#resetBtn').click(function () {
        $('#adduserdatas').data('formValidation').resetForm(true);
    });
});