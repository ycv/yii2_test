<?php

namespace frontend\modules\user\models;

use common\models\Yii2TestUser;
use yii\base\Exception;
use Yii;

/**
 * Regis form
 */
class RegisFrom extends Yii2TestUser {

    public $user_id;
    public $user_name;
    public $test_id;

    public function rules() {
        return [
            [['user_id', 'user_name'], 'required', 'message' => '用户1名不为空1'],
            [['user_id', 'test_id'], 'integer', 'message' => '必须是数字'],
        ];
    }

    public function regis() {
        if ($this->validate()) {
            $user = new Yii2TestUser();
            $user->user_name = $this->user_name;
            $user->user_id = $this->user_id;
            $user->test_id = $this->test_id;
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }

    public function getYiiuserData() {
        /* 获取主键为 “2” 的行
          $data = Yii2TestUser::findOne('2');
          echo $data->user_name;
          echo "<pre>";
          var_dump($data);
          die;
         * 
         */
        // 获取 Yii2TestUser 表的所有行并以 user_name 排序
        return Yii2TestUser::find()->orderBy('id')->asArray()->all();
    }

}
