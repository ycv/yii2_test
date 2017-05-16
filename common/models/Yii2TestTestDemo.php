<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "infi_testdemo".
 *
 * @property integer $id
 * @property string $test_id
 * @property string $username
 */
class Yii2TestTestDemo extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'yii2test_testdemo';
    }

    /**
     * @inheritdoc
     */
    //校验数据是否合法
    public function rules() {
        return [
            [['test_id', 'username'], 'required'], //必填
            [['test_id'], 'string', 'max' => 120, 'message' => '必须为字符串'], //字符串 最大值120
            [['username'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'test_id' => Yii::t('app', '标题必须填写'),
            'username' => Yii::t('app', 'Username必须填写'),
        ];
    }

}
