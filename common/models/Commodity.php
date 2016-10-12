<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%commodity}}".
 *
 * @property integer $id
 * @property string $pro_picture
 * @property integer $brand_id
 * @property integer $series_id
 * @property string $email
 * @property string $color
 * @property string $title
 * @property double $singleplugs_dis
 * @property integer $number
 * @property string $remarks
 * @property integer $is_droits
 * @property integer $shop_id
 * @property integer $discount_period
 *
 * @property User $user
 */
class Commodity extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return '{{%commodity}}';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['brand_id', 'series_id', 'number', 'is_droits', 'shop_id', 'discount_period'], 'integer'],
            [['singleplugs_dis'], 'double'], //double
            [['discount_period'], 'required'],
            [['pro_picture'], 'string', 'max' => 1000],
            [['remarks', 'color', 'email', 'title'], 'string', 'max' => 255],
            [['shop_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['shop_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', '主键ID'),
            'pro_picture' => Yii::t('app', '商品图片'),
            'brand_id' => Yii::t('app', '品牌ID'),
            'series_id' => Yii::t('app', '系列ID'),
            'email' => Yii::t('app', '邮件'),
            'color' => Yii::t('app', '颜色'),
            'title' => Yii::t('app', '主题'),
            'singleplugs_dis' => Yii::t('app', '价格'),
            'number' => Yii::t('app', '数量'),
            'remarks' => Yii::t('app', '备注'),
            'is_droits' => Yii::t('app', '是否授权'),
            'shop_id' => Yii::t('app', '用户ID'),
            'discount_period' => Yii::t('app', '折扣有效期'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser() {
        return $this->hasOne(User::className(), ['id' => 'shop_id']);
    }

}
