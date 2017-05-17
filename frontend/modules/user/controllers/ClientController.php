<?php

/* * ****************************
 * @author sara zhou
 * create time 2014-06-25 16:00:00
 * YII框架API接口端的客户端调用实例 (基于Webservice的接口服务器端)
 * 注意php.ini开启soap扩展:extension=php_soap.dll
 * ******************************
 */

class ClientController extends Controller {

    public function actionGetUserInfo() {
        //制定服务器访问地址
        $client = new SoapClient('http://localhost/api/webServer/approval');

        //调用服务器接口方法 get_user_info()获取用户信息;由于接口是传json数组,故这里以传json格式传递
        $res = $client->get_user_info('{"user_ame":"123","request_id":"23123"}');
        var_dump($res);
    }

}

?>