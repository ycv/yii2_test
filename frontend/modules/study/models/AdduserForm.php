<?php

namespace frontend\modules\study\models;

use common\models\Studydemouser;
use yii\base\Exception;
use yii\base\Model;
use Yii;
use common\components\Pinyin;

/**
 *  Studyuser 表单模型
 */
class AdduserForm extends Model {

    public $username;
    public $useremail;
    public $usersex;
    public $useraddr;
    public $userInterest;

    public function rules() {
        return [
            [['username', 'usersex'], 'required'],
            [['username', 'useraddr', 'useremail'], 'string', 'max' => 255],
        ];
    }

    /**
     * studydemouser表添加数据.
     */
    public function studyadddatas() {
        $dbtrans = Yii::$app->db->beginTransaction();
        try {
            //保存用户信息
            $study = new Studydemouser();
            //echo "<pre>";var_dump($this);die;
            $study->username = $this->username;
            $study->useremail = $this->useremail;
            $study->shortname = Pinyin::getAllPY($this->username);
            $study->firstPY = Pinyin::getFirstPY($this->username);
            $study->usersex = (int) $this->usersex;
            $study->useraddr = $this->useraddr;
            $study->userInterest = $this->userInterest;
            $study->createtime = time();
            $study->shopcode = '';
            if ($study->save()) {
                $shopcode = "D" . sprintf("%09d", $study->id);
                $studyupdataone = Studydemouser::find()->where(['id' => $study->id])->one();
                $studyupdataone->shopcode = $shopcode;
                if ($studyupdataone->update()) {
                    //事物提交
                    $dbtrans->commit();
                    return $study->id;
                } else {
                    //事务回滚
                    $dbtrans->rollBack();
                    $this->addError('studydemouser', '用户认证信息保存失败,请重试.');
                }
            } else {
                //事务回滚
                $dbtrans->rollBack();
                $this->addError('studydemouser', '用户认证信息保存失败,请重试.');
            }
        } catch (Exception $ex) {
            //事务回滚
            $dbtrans->rollBack();
            $this->addError('studydemouser', '用户认证信息保存失败,请重试.');
        }


        return null;
    }

    /**
     * 验证username 是否已经存在
     */
    public function VerificationUserNameIsExist($Verification_name) {
        return Studydemouser::find()->select(['id'])->andWhere(['username' => $Verification_name])->asArray()->one();
    }

}
