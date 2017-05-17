<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use vendor\infi_animal\Cat;
use vendor\infi_animal\Mourse;
use vendor\infi_animal\Dog;
use vendor\infi_behavior\Behavior1;
use yii\base\Event;

//vendor 第三方类
class LzbController extends Controller {

    public function actionIndex() {
        echo  "xxxxxxxxxxx";die;
        //绑定事件
        $cat = new Cat;
        $cat2 = new Cat;
        $mourse = new Mourse;
        $dog = new Dog;

        //添加事件的监听
        $cat2->on('miao', [$mourse, 'run']);
        //$dog类监听$cat里面shout事件
        //$cat->on('miao', [$dog, 'look']);
        //$dog类取消关注$cat里面shout事件
        //$cat->off('miao', [$dog, 'look']);
        //绑定所有定义Cat类的对象，如$cat2 = new Cat;$cat3 = new Cat;等等;
        //Event::on是绑定了一个对象的类方法：绑定了$mourse对象的run方法；同样也可以绑定匿名函数
        //Event::on(Cat::className(), 'miao', [$mourse, 'run']);
        //Event::on(Cat::className(), 'miao', function() {
        //echo 'miao evevt has trigged<br>';
        //});
        //先进行了事件的监听，然后执行shout方法，会执行trigger(),执行之前监听的事件
        $cat->shout();
        $cat2->shout(); //这个对象没有添加事件监听，所以不会触发绑定事件
    }

    public function actionInfiindex() {
        //获取子模块
        $m_infi = YII::$app->getModule('infi');
        //调用子模块的操作
        $m_infi->runAction('default/article');
    }

    //调用行为类
    public function actionInfitest() {
        $dog = new Dog;
        //因为Dog类继承了Component类 。所以$dog可以直接调用trigger方法
        $dog->trigger('wang');
        //$dog->look();
        //$dog->eat();
        //$dog->height = '15cm';
        echo $dog->height;
    }

    //调用行为类
    public function actionInfitest2() {
        $dog = new Dog();

        $Behavior1 = new Behavior1();
        //通过attachBehavior方法把$Behavior1对象的方法好属性注入给$dog对象
        $dog->attachBehavior($name, $behavior);
        //因为Dog类继承了Component类 。所以$dog可以直接调用trigger方法
        $dog->trigger('wang');
        //$dog->look();
        //$dog->eat();
        //$dog->height = '15cm';
        //echo $dog->height;
    }

}
