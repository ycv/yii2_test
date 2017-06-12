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
//        return Yii2TestProjectreport::find()->asArray()->all();
        $query = new Query();
        $query->select([
            "p.number p_name",
            "p.entry_name p_entry_name",
            "p.region p_region",
            "p.address p_address",
            "p.Industry_owned p_Industry_owned",
            "p.Investment_unit p_Investment_unit",
            "p.Scale p_Scale",
            "p.Party_a_contact p_Party_a_contact",
            "p.Telephone p_Telephone",
            "p.Design_unit p_Design_unit",
            "p.Designer p_Designer",
            "p.Design_Institute_tracking_people p_Design_Institute_tracking_people",
            "p.Engineering_progress p_Engineering_progress",
            "p.medium_voltage_id p_medium_voltage_id",
            "p.Low_voltage_cabinet_id p_Low_voltage_cabinet_id",
            "p.Box_three_id p_Box_three_id",
            "p.Visiting_record p_Visiting_record",
            "p.Update_date p_Update_date"
        ]);
        $query->from(["p" => Yii2TestProjectreport::tableName()]);
        $query->orderBy("p.id  ASC");
        return $query->all();
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
