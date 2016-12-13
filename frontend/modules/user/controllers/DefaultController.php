<?php

namespace frontend\modules\user\controllers;

use Yii;
use yii\web\Controller;
use frontend\modules\user\models\CommodityForm;
use common\components\FileHelper;
use yii\base\Exception;

/**
 * Default controller for the `user` module
 */
class DefaultController extends Controller {

    public $layout = "user_main";

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {
        $CommodityForm = new CommodityForm();
        $dd = $CommodityForm->getCommodtityAllDatas();
        //echo "<pre>";var_dump($dd);die;

        return $this->render('index');
    }

    /**
     * commodtidy 数据列表
     * @return type
     */
    public function actionListdatas() {
        //上个月的第一天
        $lastmonthfirstday = date("Y-m-d", strtotime(date("Y-m-01") . " -1 month "));
        //上个月的最后一天
        $lastmonthlastday = date("Y-m-t", strtotime(date("Y-m-01") . " -1 month "));

        $CommodityForm = new CommodityForm();
        $loginUserDatas = array();
        //用户 搜索数据 得到品牌id根据最新一条数据
        $loginUserDatas = $CommodityForm->getbrand_idbylatestid();
        //echo "<pre>";var_dump($loginUserDatas);die;

        if (count($loginUserDatas) > 0) {
            //厂家名称
            $commoditylistfname_temp = array();
            //系列名称
            $commoditylistxname_temp = array();
            //产品名称
            $commoditylistpro_temp = array();
            //默认厂家id
            $brandIdtemp = $loginUserDatas['brand_id'];
            //总系列数
            $seriesnum = $CommodityForm->getseriesnumbyseries_id();
            //获取厂家数据
            $f_fatas = $this->actionGetfactorydata();
            //根据品牌id分类 获取品牌数据
            $loginUserbranddatdas = $CommodityForm->getbranddatdasbybrand_id();
            foreach ($loginUserbranddatdas as $k => $v) {
                $commoditylistfname_temp[$v['brand_id']] = $f_fatas[$v['brand_id']];
            }
            //根据品牌id获取用户相关数据
            $pdatas = $this->actionGetuserdatasbybrand_id($brandIdtemp);
            if (count($pdatas) < 3) {
                $this->actionAddlistsdata();
            }

            $commoditylistxname_temp = $pdatas['series_name'];
            $commoditylistpro_temp = $pdatas['productdatas'];
            //默认系列id
            $seriesIdtemp = $pdatas['series_id'];

            unset($pdatas);
            unset($loginUserbranddatdas);
            unset($f_fatas);
            unset($loginUserDatas);
            unset($CommodityForm);
            //echo "<pre>";var_dump($commoditylistpro_temp);die;


            return $this->render('userlist', ['seriesnum' => $seriesnum, 'seriesIdtemp' => $seriesIdtemp, 'brandIdtemp' => $brandIdtemp, 'f_fatas' => $commoditylistfname_temp, 's_fatas' => $commoditylistxname_temp, 'p_fatas' => $commoditylistpro_temp]);
        } else {
            $this->actionAddlistsdata();
        }
    }

    /*
     * 根据品牌id获取用户相关数据
     */

    public function actionGetuserdatasbybrand_id($brand_id) {
        $datatemp = array();
        //取厂家对应到系列数据
        $s_fatas = $this->actionGetseriesdata($brand_id);

        $CommodityForm = new CommodityForm();
        //根据品牌id 获取对应到系列数据
        $loginUserseriesDatas = $CommodityForm->getseriesdatasbybrand_id($brand_id);
        if (count($loginUserseriesDatas) < 1) {
            return false;
        }
        //默认系列id
        $serieIdtemp = $loginUserseriesDatas[0]['series_id'];
        //商品数据
        $commoditylistpro_temp = array();
        foreach ($loginUserseriesDatas as $key => $value) {
            if ($serieIdtemp == $value['series_id']) {
                $value['discount_period'] = date('Y-m-d H:i:s', $value['discount_period']);
                $commoditylistpro_temp[$key] = $value;
                $commoditylistpro_temp[$key]['series_name'] = $s_fatas[$value['series_id']];
            }
        }
        $commoditylistxname_temp = $this->assoc_unique($loginUserseriesDatas, "series_id");
        foreach ($commoditylistxname_temp as $key => $value) {
            $commoditylistxname_temp[$key]['series_name'] = $s_fatas[$value['series_id']];
        }

        $datatemp['series_name'] = $commoditylistxname_temp;
        $datatemp['series_id'] = $serieIdtemp;
        $datatemp['productdatas'] = $commoditylistpro_temp;
        unset($CommodityForm);
        unset($loginUserseriesDatas);
        unset($s_fatas);
        unset($commoditylistxname_temp);
        unset($serieIdtemp);
        unset($commoditylistpro_temp);
        return $datatemp;
    }

    /*
     * 二维数组
     * 某一键名的值不能重复，删除重复项
     */

    public function assoc_unique($arr, $key) {
        $tmp_arr = array();
        foreach ($arr as $k => $v) {
            if (in_array($v[$key], $tmp_arr)) {//搜索$v[$key]是否在$tmp_arr数组中存在，若存在返回true 
                unset($arr[$k]);
            } else {
                $tmp_arr[] = $v[$key];
            }
        }
        rsort($arr); //sort函数对数组进行排序 倒序
        unset($tmp_arr);
        return $arr;
    }

    /*
     * 添加数据页面
     */

    public function actionAddlistsdata() {
        //获取厂家数据
        $f_fatas = $this->actionGetfactorydata();
        return $this->render('adddatas', ['f_fatas' => $f_fatas]);
    }

    /*
     * js添加数据
     */

    public function actionAddarticledata() {
        $json ['code'] = 1;
        $json ['message'] = "数据存储失败!";

        $commodity = new CommodityForm();
        //用于CommodityForm rules（） 判断数据类型是否正确
        //var_dump(Yii::$app->request->post());die;
        if ($commodity->load(Yii::$app->request->post()) && $commodity->validate()) {
            if ($commodity->commodityadddatas()) {
                $json ['code'] = 0;
                $json ['message'] = "数据保存成功";
            }
        }




        echo json_encode($json, JSON_UNESCAPED_UNICODE);
        die();
    }

    /*
     * 获取系列数据
     * 根据厂家id 获取系列json文件
     */

    public function actionGetseriesdata($brand_id) {
        $seriesdata_arr = array();
        $file = Yii::$app->basePath . '/web/factorydata/seri/' . $brand_id . '.js';
        $seriesdata = FileHelper::file_get($file);
        $seriesdata_arr = json_decode($seriesdata);
        $seriesdata_arrtemp = array();
        if (count($seriesdata_arr) > 0) {
            foreach ($seriesdata_arr as $k => $value) {
                if (isset($value->s)) {
                    $seriesdata_arrtemp[$value->s] = $value->name;
                }
            }
        }
        return $seriesdata_arrtemp;
    }

    /*
     * 获取厂家数据
     */

    public function actionGetfactorydata() {
        $factorydata_arr = array();
        $file = Yii::$app->basePath . '/web/factorydata/f.js';
        $factorydata = FileHelper::file_get($file);
        $factorydata_arr = json_decode($factorydata);
        $factorydata_arrtemp = array();
        foreach ($factorydata_arr as $k => $value) {
            if (isset($value->open)) {
                $factorydata_arrtemp[$value->f] = $value->name;
            }
        }
        unset($factorydata_arr);
        unset($file);
        unset($factorydata);
        return $factorydata_arrtemp;
    }

    /*
     * Ajax 根据系列id返回商品数据
     */

    public function actionGetseriesdatabyajax() {
        $json ['retval'] = false;
        //var_dump(Yii::$app->request->post());
        $sid = Yii::$app->request->post()['sid'];
        $productdatas = array();
        try {
            $CommodityForm = new CommodityForm();
            //根据系列id返回商品数据
            $productdatas = $CommodityForm->getproductdatasbyseries_id($sid);
        } catch (Exception $e) {
            
        }
        if (count($productdatas) > 0) {
            $json ['retval'] = true;
            $json ['data'] = $productdatas;
        }
        unset($sid);
        unset($productdatas);
        echo json_encode($json, JSON_UNESCAPED_UNICODE);
        die();
    }

    /*
     * Ajax 根据品牌id返回商品数据
     */

    public function actionGetdatasbybrandidajax() {
        $json ['retval'] = false;
        $bid = Yii::$app->request->post()['bid'];
        $productdatas = array();
        try {
            $productdatas = $this->actionGetuserdatasbybrand_id($bid);
        } catch (Exception $e) {
            
        }
        if (count($productdatas) > 0) {
            $json ['retval'] = true;
            $json ['data'] = $productdatas;
        }
        unset($bid);
        unset($productdatas);
        echo json_encode($json, JSON_UNESCAPED_UNICODE);
        die();
    }

    /*
     * Ajax 根据id返回商品详情数据
     */

    public function actionGetdatasbypro_idajax() {
        $json ['retval'] = false;
        $id = Yii::$app->request->post()['id'];
        $productdatas = array();
        try {
            $CommodityForm = new CommodityForm();
            //根据id返回商品详情数据
            $productdatas = $CommodityForm->actionGetdatasbypro_id($id);
        } catch (Exception $e) {
            
        }
        if (count($productdatas) > 0) {
            $json ['retval'] = true;
            $json ['data'] = $productdatas;
        }
        unset($id);
        unset($productdatas);
        echo json_encode($json, JSON_UNESCAPED_UNICODE);
        die();
    }

    /*
     * Ajax 购物车 商品详情页面
     */

    public function actionShoppingcartdetails() {
        echo "sss";
        die;
    }

}
