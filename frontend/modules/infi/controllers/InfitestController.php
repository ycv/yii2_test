<?php

namespace frontend\modules\infi\controllers;

use Yii;
use yii\web\Controller;
use common\models\InfiTestdemo;

class InfitestController extends Controller {

    public function actionIndex() {
        $i_test = new InfiTestdemo();
        $i_test->test_id = "014";
        $i_test->username = "希尔瓦娜斯";
        $i_test->save();
        //捕获存储异常
        echo "vvvvvvv";
        die;
        echo "<pre>";
        var_dump($i_test->getErrors());
        //echo "aaaaaaaaa";
        //die;
    }

    //设置缓存
    public function actionFngetcache() {
        //获取缓存组件
        $oSetcache = YII::$app->cache;
        //往缓存当中写数据 当add 添加重复缓存时 key 相同，第二条不会执行；当key已经存在时，add不会执行
        $oSetcache->add('key1', 'hello world');
        $oSetcache->add('key2', 'hello world2');

        //有效期设置
        //$oSetcache->add("key3", 'hello world3', 10); //存在10秒
        //$oSetcache->set("key3", 'hello world3', 10); //存在10秒 两个方法一样
        //修改缓存
        //$oSetcache->set('key1', 'hello world2222222');
        //删除缓存
        //$oSetcache->delete('key1');
        //清空所有缓存
        //$oSetcache->flush();
        //读缓存
        $oGetcache = $oSetcache->get("key2");
        var_dump($oGetcache);
        die;
    }

    //缓存依赖
    public function actionFnfiledependency() {
        //获取缓存组件
        $oSetcache = YII::$app->cache;
        //$oSetcache->flush();
        /*
          //表达式依赖
          $odependency = new \yii\caching\ExpressionDependency(['expression' => 'YII::$app->request->get("name")']);
          //此缓存3000秒之后失效；或者$odependency表达式发生变化 缓存失效，就是参数name值变化 缓存失效
          $oSetcache->add('key_11', 'hello world2', 3000, $odependency);
          var_dump($oSetcache->get('key_11'));
         * 
         */
        //DB依赖
        $odependency = new \yii\caching\DbDependency(['sql' => 'select count(*) from infi_testdemo']);
        //此缓存3000秒之后失效；或者表infi_testdemo总条数发生变化 缓存失效，就是表infi_testdemo count(*)值变化 缓存失效
        $oSetcache->add('key_11', 'hello world2', 3000, $odependency);
        $oSetcache->add('key_22', 'hello world222222', 3000);
        var_dump($oSetcache->get('key_11'), $oSetcache->get('key_22'));
    }

    //页面片段缓存
    public function actionFnfragmentcache() {
        $ttest1 = "模拟数据11";
        $ttest2 = "11111222222221";
        return $this->renderPartial('fragmentcache', array("ttest1" => $ttest1, "ttest2" => $ttest2));
    }

    public function actionFninfidemopage() {
        //读取文件内容 文件位于yii\frontend\web
        $scontent = file_get_contents('infidemo.txt');
        $ttest1 = "dasd";
        return $this->renderPartial('infidemopage', array('scontentdata' => $scontent, 'ttest1' => $ttest1));
    }

    //先于别的方法先执行
    public function behaviors() {
        /*
          //服务器缓存机制
          return [
          [
          'class' => 'yii\filters\PageCache',
          'duration' => 20, //缓存时间
          'only' => ['fninfidemopage'], //判断只缓存某个方法
          //'only' => ['fninfidemopage','fnfragmentcache'],可指定多个方法
          'dependency' => [ 'class' => 'yii\caching\DbDependency', 'sql' => 'select count(*) from infi_testdemo'] //依赖条件
          ]
          ];
         * 
         */
        //一般情况 先比较lastModified后比较etagSeed 
        //浏览器缓存机制  服务器返回304状态吗 说明页面无序修改
        return [
            [
                'class' => 'yii\filters\HttpCache',
                //时间比对 ：判断服务器数据和浏览器数据修改日期是否一致
                'lastModified' => function() {
                    return filemtime('infidemo.txt');
                    //return 146281758;
                },
                //判断服务器数据和浏览器数据内容是否一致
                'etagSeed' => function() {
                    $fp = fopen('infidemo.txt', 'r');
                    $str_t = fgets($fp); //fgets() 函数从文件指针中读取一行。
                    fclose($fp);
                    return $str_t;
                }
            ]
        ];
    }

}
