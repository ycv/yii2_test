<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2test_mediumvoltage".
 *
 * @property integer $id
 * @property string $Disk_factory_situation
 * @property string $Estimated_time_of_purchase
 * @property string $Picture_above
 * @property string $WMTS
 * @property string $Number
 * @property string $Competitor
 * @property string $Tracking_progress
 * @property string $Estimated_amount_of_purchase
 * @property string $Actual_purchase_amount
 */
class Yii2TestProjectreport extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'yii2test_mediumvoltage';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'id'),
            'Disk_factory_situation' => Yii::t('app', 'Disk_factory_situation'), //盘厂情况
            'Estimated_time_of_purchase' => Yii::t('app', 'Estimated_time_of_purchase'), //	预计采购时间
            'Picture_above' => Yii::t('app', 'Picture_above'), //上图否
            'WMTS' => Yii::t('app', 'WMTS'), //WMTS
            'Number' => Yii::t('app', 'Number'), //数量
            'Competitor' => Yii::t('app', 'Competitor'), //	竞争对手
            'Tracking_progress' => Yii::t('app', 'Tracking_progress'), //跟踪进展
            'Estimated_amount_of_purchase' => Yii::t('app', 'Estimated_amount_of_purchase'), //预计采购金额(K)	
            'Actual_purchase_amount' => Yii::t('app', 'Actual_purchase_amount'), //实际采购金额(K)
        ];
    }

}
