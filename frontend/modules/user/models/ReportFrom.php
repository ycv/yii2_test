<?php

namespace frontend\modules\user\models;

use common\models\Yii2TestProjectreport;
use common\models\Yii2TestMediumvoltage;
use common\models\Yii2TestBoxthree;
use common\models\Yii2TestLowvoltagecabinet;
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
        $query = new Query();
        $query->select([
            "r.number number", "r.entry_name entry_name",
            "( (l.`Estimated_amount_of_purchase_ATMT`+l.`Estimated_amount_of_purchase_ATS`+l.`Estimated_amount_of_purchase_WEFP`+l.`Estimated_amount_of_purchase_iSCB`+l.`Estimated_amount_of_purchase_SPD`+l.`Estimated_amount_of_purchase_WGR`)+ (b.`Estimated_amount_of_purchase`+b.`Estimated_amount_of_purchase_WEFP`+b.`Estimated_amount_of_purchase_WPFP`+b.`Estimated_amount_of_purchase_ISCB`+b.`Estimated_amount_of_purchase_SPD`+b.`Estimated_amount_of_purchase_WGR`+b.`Estimated_amount_of_purchase_iARC`) +m.`Estimated_amount_of_purchase` )  Estimated_amount_of_purchase"
        ]);
        $query->from(["r" => Yii2TestProjectreport::tableName()]);
        $query->leftJoin(["l" => Yii2TestLowvoltagecabinet::tableName()], "r.Low_voltage_cabinet_id = l.id"); //低压柜
        $query->leftJoin(["b" => Yii2TestBoxthree::tableName()], "r.Box_three_id = b.id"); //三箱
        $query->leftJoin(["m" => Yii2TestMediumvoltage::tableName()], "r.medium_voltage_id = m.id"); //中压
        $query->where(["r.Exit_Top" => ""])->andWhere(['!=', 'r.Join_TOP', '']);
        $query->orderBy("r.id  DESC");
        return $query->all();
    }

}
