/*
 * 对选中的标签激活active状态，对先前处于active状态但之后未被选中的标签取消active
 * （实现左侧菜单中的标签点击后变色的效果）
 */
$(document).ready(function () {
    $('ul.nav > li').click(function (e) {
        //e.preventDefault();	加上这句则导航的<a>标签会失效
        $('ul.nav > li').removeClass('active');
        $(this).addClass('active');
        if ($(this).attr('data2') && $(this).attr('data3')) {
            //点击二级标签
            if (!$(this).children('a').hasClass("studt-left-a-checked") && !$(this).children('a').hasClass("studt_left_a_checkedold")) {
                //加载数据
                $("ul[data4='erjibiaoqian']").find('a').each(function () {
                    if ($(this).hasClass("studt-left-a-checked")) {
                        $(this).removeClass("studt-left-a-checked");
                    }
                    if ($(this).hasClass("studt_left_a_checkedold")) {
                        $(this).removeClass("studt_left_a_checkedold");
                    }
                });
                $(this).children('a').addClass("studt-left-a-checked");
                showAtRight($(this).attr('data3'));

            } else {
                //不加载数据
                if ($(this).children('a').hasClass("studt_left_a_checkedold")) {
                    $(this).children('a').removeClass("studt_left_a_checkedold").addClass("studt-left-a-checked");
                }
            }
            //点击二级标签 一级标签加色
            if (!$("li[data1='" + $(this).attr('data2') + "']").hasClass("active")) {
                $("li[data1='" + $(this).attr('data2') + "']").addClass("active");
            }
            //js 获取data2
            //var data2 = Obj.getAttribute ( 'data2' ) ; 
        } else {
            //点击一级标签
            $("ul[data4='erjibiaoqian']").find('a').each(function () {
                if ($(this).hasClass("studt-left-a-checked")) {
                    $(this).removeClass("studt-left-a-checked").addClass("studt_left_a_checkedold");
                }
            });
        }
    });
});

/*
 * 解决ajax返回的页面中含有javascript的办法：
 * 把xmlHttp.responseText中的脚本都抽取出来，不管AJAX加载的HTML包含多少个脚本块，我们对找出来的脚本块都调用eval方法执行它即可
 */

function executeScript(html)
{
    var reg = /<script[^>]*>([^\x00]+)$/i;
    //对整段HTML片段按<\/script>拆分
    var htmlBlock = html.split("<\/script>");
    for (var i in htmlBlock)
    {
        var blocks;//匹配正则表达式的内容数组，blocks[1]就是真正的一段脚本内容，因为前面reg定义我们用了括号进行了捕获分组
        if (blocks = htmlBlock[i].match(reg))
        {
            //清除可能存在的注释标记，对于注释结尾-->可以忽略处理，eval一样能正常工作
            var code = blocks[1].replace(/<!--/, '');
            try
            {
                eval(code); //执行脚本
            } catch (e)
            {
            }
        }
    }
}

/*
 * 利用div实现左边点击右边显示的效果（以id="content"的div进行内容展示）
 * 注意：
 *   ①：js获取网页的地址，是根据当前网页来相对获取的，不会识别根目录；
 *   ②：如果右边加载的内容显示页里面有css，必须放在主页（即例中的index.php）才起作用
 *   （如果单纯的两个页面之间include，子页面的css和js在子页面是可以执行的。 主页面也可以调用子页面的js。但这时要考虑页面中js和渲染的先后顺序 ）
 */
function showAtRight(url) {

    var xmlHttp;

    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlHttp = new XMLHttpRequest();	//创建 XMLHttpRequest对象
    } else {
        // code for IE6, IE5
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlHttp.onreadystatechange = function () {
        //onreadystatechange — 当readystate变化时调用后面的方法
        if (xmlHttp.readyState == 4) {
            //xmlHttp.readyState == 4	——	finished downloading response

            if (xmlHttp.status == 200) {
                //xmlHttp.status == 200		——	服务器反馈正常			
                document.getElementById("content").innerHTML = xmlHttp.responseText;	//重设页面中id="content"的div里的内容
                executeScript(xmlHttp.responseText);	//执行从服务器返回的页面内容里包含的JavaScript函数
            }
            //错误状态处理
            else if (xmlHttp.status == 404) {
                alert("出错了☹   （错误代码：404 Not Found），……！");
                /* 对404的处理 */
                return;
            } else if (xmlHttp.status == 403) {
                alert("出错了☹   （错误代码：403 Forbidden），……");
                /* 对403的处理  */
                return;
            } else {
                alert("出错了☹   （错误代码：" + request.status + "），……");
                /* 对出现了其他错误代码所示错误的处理   */
                return;
            }
        }

    };

    //把请求发送到服务器上的指定文件（url指向的文件）进行处理
    xmlHttp.open("GET", url, true);		//true表示异步处理
    xmlHttp.send();
}



/**
 * 加载右边内容
 */
function showAtRightNonstatic(url, t) {
    console.log('ssssssss');
    return false;

    $.ajax({
        type: "GET",
        dataType: "json",
        url: basepath + "/study/default/" + url,
        async: true,
        success: function (json) {
            if (json.retval) {
                //清空系列下原数据
                $("#content").empty();
                $("#content").html(json.data);
            } else {
                alert("出错了☹   （错误代码：404 Not Found），……！");
                /* 对404的处理 */
                return;
            }

        }
    });
}



/*根据绝对路径加载js*/
function includejspath(jssrc) {
    /* 可以include多个js，用|隔开*/
    var jssrcs = jssrc.split("|");
    for (var i = 0; i < jssrcs.length; i++) {
        /*
         使用juqery的同步ajax加载js.
         使用document.write 动态添加的js会在当前js的后面，可能会有js引用问题
         动态创建script脚本，是非阻塞下载，也会出现引用问题
         */
        $.ajax({type: 'GET', url: jssrcs[i], async: false, dataType: 'script'});
    }
}

/*对象包含两个完全独立的方法，分别用来加载CSS 文件和JS 文件，参数均为欲加载的文件路径。*/
var study_dynamicLoading = {
    css: function (path) {
        if (!path || path.length === 0) {
            throw new Error('argument "path" is required !');
        }
        var head = document.getElementsByTagName('head')[0];
        var link = document.createElement('link');
        link.href = path;
        link.rel = 'stylesheet';
        link.type = 'text/css';
        head.appendChild(link);
    },
    js: function (path) {
        if (!path || path.length === 0) {
            throw new Error('argument "path" is required !');
        }
        var head = document.getElementsByTagName('head')[0];
        var script = document.createElement('script');
        script.src = path;
        script.type = 'text/javascript';
        head.appendChild(script);
    }
};
