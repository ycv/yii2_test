<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%article}}".
 *
 * @property integer $id
 * @property string $content
 * @property integer $commodity_id
 * @property integer $user_id
 * @property string $time
 *
 * @property User $user
 */
class Article extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return '{{%article}}';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['user_id'], 'integer'],
            [['commodity_id'], 'required'],
            [['content'], 'string', 'max' => 221000],
            [['time'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', '主键ID'),
            'content' => Yii::t('app', '内容'),
            'commodity_id' => Yii::t('app', 'commodityId'),
            'user_id' => Yii::t('app', '用户ID'),
            'time' => Yii::t('app', '添加时间'),
        ];
    }

}
