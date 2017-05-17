<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2test_user".
 *
 * @property string $id
 * @property integer $user_id
 * @property string $user_name
 * @property integer $test_id
 */
//\yii\db\ActiveRecord  活动记录类
//Yiiuser继承了活动记录类，所以Yiiuser可以对数据库表进行操作
//tableName函数返回了yiiuser表， 所以Yiiuser类可以对yiiuser表进行操作
class Yii2TestUser extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'yii2test_user';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['user_id', 'user_name', 'test_id'], 'required'], //required 必填
            [['user_id', 'test_id'], 'integer'], //必须integer型
            [['user_name'], 'string', 'max' => 120]//必须string型 最大值120
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'user_name' => Yii::t('app', 'User Name'),
            'test_id' => Yii::t('app', 'Test ID'),
        ];
    }

}
