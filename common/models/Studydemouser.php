<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%studydemouser}}".
 *
 * @property integer $id
 * @property string $username
 * @property string $shortname
 * @property string $firstPY
 * @property string $useremail
 * @property integer $usersex
 * @property string $userInterest
 * @property string $useraddr
 * @property integer $createtime
 * @property string $shopcode
 */
class Studydemouser extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return '{{%studydemouser}}';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['username', 'usersex'], 'required', 'message' => ''],
            [['createtime'], 'integer'],
            [['usersex'], 'number'],
            [['username', 'useraddr', 'userInterest', 'useremail', 'shopcode', 'shortname', 'firstPY'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'username' => 'username',
            'shortname' => 'shortname',
            'firstPY' => 'firstPY',
            'useremail' => 'useremail',
            'usersex' => 'usersex',
            'userInterest' => 'userInterest',
            'useraddr' => 'useraddr',
            'createtime' => 'createtime',
            'shopcode' => 'shopcode',
        ];
    }

}
