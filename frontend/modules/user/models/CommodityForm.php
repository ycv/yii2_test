<?php

namespace frontend\modules\user\models;

use common\models\Commodity;
use common\models\Article;
use yii\base\Exception;
use yii\base\Model;
use Yii;

/**
 *  Commodity表单模型
 */
class CommodityForm extends Model {

    public $brand_id; //品牌ID
    public $series_idarr; //系列ID
    public $is_droits; //是否授权
    public $shop_id; //用户ID
    public $number; //数量
    public $singleplugs_dis; //价格
    public $pro_picture; //商品图片
    public $remarks; //备注
    public $discount_period; //折扣有效期
    public $title;
    public $email;
    public $article_content;
    public $color;

    public function rules() {
        return [
                [['brand_id', 'number', 'is_droits', 'shop_id'], 'integer'],
                [['singleplugs_dis'], 'double'],
                [['discount_period', 'series_idarr'], 'required'],
                [['pro_picture'], 'string', 'max' => 1000],
                [['remarks', 'title', 'color'], 'string', 'max' => 255],
                [['article_content', 'email'], 'string'],
        ];
    }

    /*
     * 获取全部商品
     */

    public function getCommodtityAllDatas() {
        return Commodity::find()->orderBy('id DESC')->asArray()->all();
    }

    /*
     * 根据id返回商品详情数据 获取单条数据
     */

    public function actionGetdatasbypro_id($id) {
        $data = array();
        $data['commoditydata'] = Commodity::find()->andWhere(['shop_id' => 4, 'id' => $id])->asArray()->one();
        if (1 == $data['commoditydata']['is_droits']) {
            $data['articledata'] = Article::find()->andWhere(['shop_id' => 4, 'commodity_id' => $id])->asArray()->one();
        }
        return $data;
    }

    /**
     * 登录用户的商品列表all
     */
    public function getcommoditydatabyUserId() {
        /*
          if (!Yii::$app->user->identity) {
          return null;
          }
         */
        return Commodity::find()->where(["shop_id" => 4])->orderBy('id DESC')->asArray()->all();
        //return Commodity::find()->where(["shop_id" => Yii::$app->user->identity->id])->orderBy('id')->asArray()->all();
    }

    /**
     * 得到品牌id根据最新一条数据
     */
    public function getbrand_idbylatestid() {
        /*
          if (!Yii::$app->user->identity) {
          return null;
          }
         */
        return Commodity::find()->select(['brand_id'])->andWhere(['shop_id' => 4])->orderBy('id DESC')->asArray()->one();
    }

    /**
     * 总系列数
     */
    public function getseriesnumbyseries_id() {
        /*
          if (!Yii::$app->user->identity) {
          return null;
          }
         */
        return Commodity::find()->Where(['shop_id' => 4])->groupBy('series_id')->count('id');
    }

    /**
     * 根据品牌id分类 获取品牌数据
     */
    public function getbranddatdasbybrand_id() {
        /*
          if (!Yii::$app->user->identity) {
          return null;
          }
         */
        return Commodity::find()->select(['brand_id'])->andWhere(['shop_id' => 4])->orderBy('id DESC')->groupBy('brand_id')->asArray()->all();
    }

    /**
     * 根据品牌id 获取对应到系列数据
     */
    public function getseriesdatasbybrand_id($brand_id) {
        /*
          if (!Yii::$app->user->identity) {
          return null;
          }
         */
        return Commodity::find()->andWhere(['shop_id' => 4, 'brand_id' => $brand_id])->orderBy('id DESC')->asArray()->all();
    }

    /**
     * 根据系列id返回商品数据
     */
    public function getproductdatasbyseries_id($series_id) {
        /*
          if (!Yii::$app->user->identity) {
          return null;
          }
         */
        return Commodity::find()->andWhere(['shop_id' => 4, 'series_id' => $series_id])->orderBy('id DESC')->asArray()->all();
    }

    /**
     * 添加数据
     */
    public function commodityadddatas() {
        //创建事物
        $dbtrans = Yii::$app->db->beginTransaction();
        try {
            $shop_id = 4;
            foreach ($this->series_idarr as $v) {
                $commodity = new Commodity();
                $commodity->shop_id = $shop_id;
                $commodity->pro_picture = $this->pro_picture; //图片
                $commodity->brand_id = (int) $this->brand_id; //品牌ID
                $commodity->email = $this->email;
                $commodity->color = $this->color;
                $commodity->title = $this->title; //主题
                $commodity->remarks = trim($this->remarks); //评论 备注
                $commodity->discount_period = strtotime($this->discount_period); //有效期
                $commodity->number = (int) $this->number; //数量
                if ($this->article_content) {
                    $commodity->is_droits = 1;
                } else {
                    $commodity->is_droits = 0;
                }
                //$commodity->is_droits = (int) $this->is_droits; //是否有详情
                $commodity->singleplugs_dis = 16.87 * $this->singleplugs_dis; //价格
                $commodity->pro_picture = "";
                $commodity->series_id = (int) $v; //系列ID
                //覆盖之前的评论相同的系列数据 及 Article表数据

                $old_commodity = array();
                $old_commodity = Commodity::find()->select(['id'])->andWhere(['shop_id' => $shop_id, 'remarks' => $commodity->remarks, 'series_id' => $v, 'brand_id' => $this->brand_id])->asArray()->one();


                if (count($old_commodity) > 0) {
                    Commodity::deleteAll(['in', 'id', $old_commodity]);
                    Article::deleteAll(['in', 'commodity_id', $old_commodity]);
                }
                if (!$commodity->save()) {
                    //error
                    throw new Exception('数据提交失败!!!', 1);
                } else {
                    if ($this->article_content) {
                        $article = new Article();
                        //表Commodity 新增ID
                        $article->commodity_id = $commodity->attributes['id'];
                        $article->shop_id = $shop_id;
                        $article->content = $this->article_content;
                        $article->time = date('Y-m-d H:i:s', time());
                        $article->save();
                    }
                }
            }
            $dbtrans->commit();
            return true;
        } catch (Exception $ex) {
            //事物回滚
            $dbtrans->rollBack();
            return false;
        }
    }

}
