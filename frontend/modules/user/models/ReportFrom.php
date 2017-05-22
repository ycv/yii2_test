<?php

namespace frontend\modules\user\models;

use common\models\Yii2TestProjectreport;
use Yii;
use yii\db\Query;
use yii\base\Model;

class ReportFrom extends Model {

    /**
     * 获取项目跟踪报表数据 全部数据
     */
    public function getProjectReportLists() {
        return Yii2TestProjectreport::find()->asArray()->all();
    }

    /**
     * 获取报表 Top10目录 数据
     */
    public function getReportTopLists() {
//        $query = new Query();
//        $query->select([
//            "u.mobile mobile", "oa.sex sex", "oa.birthday birthday", "oa.avatar avatar", "u.overage overage", "u.integral integral",
//            "oa.nickname nickname"//昵称
//        ]);
//        $query->from(["u" => User::tableName()]);
//        $query->leftJoin(["oa" => Oauth::tableName()], "u.id = oa.user_id"); //用户
//        $query->where(["u.id" => $userId]);
//        return $query->all();




        return Yii2TestProjectreport::find()->select(['number', 'entry_name'])->where(["Exit_Top" => ""])->andWhere(['!=', 'Join_TOP', ''])->orderBy("id  DESC")->asArray()->all();
    }

    /*
     * 项目跟踪报表!
     * $V$5:$V$504 中压 预计采购金额(K)
     * +项目跟踪报表!$AF$5:$AF$504
     * +项目跟踪报表!$AN$5:$AN$504
     * +项目跟踪报表!$AV$5:$AV$504
     * +项目跟踪报表!$BD$5:$BD$504
     * +项目跟踪报表!$BL$5:$BL$504
     * +项目跟踪报表!$BT$5:$BT$504
     * +项目跟踪报表!$CL$5:$CL$504
     * +项目跟踪报表!$CT$5:$CT$504+
     * 项目跟踪报表!$DB$5:$DB$504
     * +项目跟踪报表!$DJ$5:$DJ$504
     * +项目跟踪报表!$DR$5:$DR$504+
     * 项目跟踪报表!$DZ$5:$DZ$504+
     * 项目跟踪报表!$EH$5:$EH$504,0)
     * )
     */
}
