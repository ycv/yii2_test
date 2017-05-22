<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2test_lowvoltagecabinet".
 *
 * @property integer $id
 * @property integer $Disk_factory_situation
 * @property integer $Estimated_time_of_purchase
 * @property integer $ATMT
 * @property integer $Picture_above_ATMT
 * @property integer $Number_ATMT
 * @property integer $Recommended_model_ATMT
 * @property integer $Competitor_ATMT
 * @property integer $Tracking_progress_ATMT
 * @property integer $Estimated_amount_of_purchase_ATMT
 * @property integer $Actual_purchase_amount_ATMT
 * @property integer $ATS
 * @property integer $Picture_above_ATS
 * @property integer $Number_ATS
 * @property integer $Recommended_model_ATS
 * @property integer $Competitor_ATS
 * @property integer $Tracking_progress_ATS
 * @property integer $Estimated_amount_of_purchase_ATS
 * @property integer $Actual_purchase_amount_ATS
 * @property integer $WEFP
 * @property integer $Picture_above_WEFP
 * @property integer $Number_WEFP
 * @property integer $Recommended_model_WEFP
 * @property integer $Competitor_WEFP
 * @property integer $Tracking_progress_WEFP
 * @property integer $Estimated_amount_of_purchase_WEFP
 * @property integer $Actual_purchase_amount_WEFP
 * @property integer $iSCB
 * @property integer $Picture_above_iSCB
 * @property integer $Number_iSCB
 * @property integer $Recommended_model_iSCB
 * @property integer $Competitor_iSCB
 * @property integer $Tracking_progress_iSCB
 * @property integer $Estimated_amount_of_purchase_iSCB
 * @property integer $Actual_purchase_amount_iSCB
 * @property integer $SPD
 * @property integer $Picture_above_SPD
 * @property integer $Number_SPD
 * @property integer $Recommended_model_SPD
 * @property integer $Competitor_SPD
 * @property integer $Tracking_progress_SPD
 * @property integer $Estimated_amount_of_purchase_SPD
 * @property integer $Actual_purchase_amount_SPD
 * @property integer $WGR
 * @property integer $Picture_above_WGR
 * @property integer $Number_WGR
 * @property integer $Recommended_model_WGR
 * @property integer $Competitor_WGR
 * @property integer $Tracking_progress_WGR
 * @property integer $Estimated_amount_of_purchase_WGR
 * @property integer $Actual_purchase_amount_WGR
 */
class Yii2TestLowvoltagecabinet extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'yii2test_lowvoltagecabinet';
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
            'Disk_factory_situation' => Yii::t('app', 'Disk_factory_situation'),
            'Estimated_time_of_purchase' => Yii::t('app', 'Estimated_time_of_purchase'),
            'ATMT' => Yii::t('app', 'ATMT'),
            'Picture_above_ATMT' => Yii::t('app', 'Picture_above_ATMT'),
            'Number_ATMT' => Yii::t('app', 'Number_ATMT'),
            'Recommended_model_ATMT' => Yii::t('app', 'Recommended_model_ATMT'),
            'Competitor_ATMT' => Yii::t('app', 'Competitor_ATMT'),
            'Tracking_progress_ATMT' => Yii::t('app', 'Tracking_progress_ATMT'),
            'Estimated_amount_of_purchase_ATMT' => Yii::t('app', 'Estimated_amount_of_purchase_ATMT'),
            'Actual_purchase_amount_ATMT' => Yii::t('app', 'Actual_purchase_amount_ATMT'),
            'ATS' => Yii::t('app', 'ATS'),
            'Picture_above_ATS' => Yii::t('app', 'Picture_above_ATS'),
            'Number_ATS' => Yii::t('app', 'Number_ATS'),
            'Recommended_model_ATS' => Yii::t('app', 'Recommended_model_ATS'),
            'Competitor_ATS' => Yii::t('app', 'Competitor_ATS'),
            'Tracking_progress_ATS' => Yii::t('app', 'Tracking_progress_ATS'),
            'Estimated_amount_of_purchase_ATS' => Yii::t('app', 'Estimated_amount_of_purchase_ATS'),
            'Actual_purchase_amount_ATS' => Yii::t('app', 'Actual_purchase_amount_ATS'),
            'WEFP' => Yii::t('app', 'WEFP'),
            'Picture_above_WEFP' => Yii::t('app', 'Picture_above_WEFP'),
            'Number_WEFP' => Yii::t('app', 'Number_WEFP'),
            'Recommended_model_WEFP' => Yii::t('app', 'Recommended_model_WEFP'),
            'Competitor_WEFP' => Yii::t('app', 'Competitor_WEFP'),
            'Tracking_progress_WEFP' => Yii::t('app', 'Tracking_progress_WEFP'),
            'Estimated_amount_of_purchase_WEFP' => Yii::t('app', 'Estimated_amount_of_purchase_WEFP'),
            'Actual_purchase_amount_WEFP' => Yii::t('app', 'Actual_purchase_amount_WEFP'),
            'iSCB' => Yii::t('app', 'iSCB'),
            'Picture_above_iSCB' => Yii::t('app', 'Picture_above_iSCB'),
            'Number_iSCB' => Yii::t('app', 'Number_iSCB'),
            'Recommended_model_iSCB' => Yii::t('app', 'Recommended_model_iSCB'),
            'Competitor_iSCB' => Yii::t('app', 'Competitor_iSCB'),
            'Tracking_progress_iSCB' => Yii::t('app', 'Tracking_progress_iSCB'),
            'Estimated_amount_of_purchase_iSCB' => Yii::t('app', 'Estimated_amount_of_purchase_iSCB'),
            'Actual_purchase_amount_iSCB' => Yii::t('app', 'Actual_purchase_amount_iSCB'),
            'SPD' => Yii::t('app', 'SPD'),
            'Picture_above_SPD' => Yii::t('app', 'Picture_above_SPD'),
            'Number_SPD' => Yii::t('app', 'Number_SPD'),
            'Recommended_model_SPD' => Yii::t('app', 'Recommended_model_SPD'),
            'Competitor_SPD' => Yii::t('app', 'Competitor_SPD'),
            'Tracking_progress_SPD' => Yii::t('app', 'Tracking_progress_SPD'),
            'Estimated_amount_of_purchase_SPD' => Yii::t('app', 'Estimated_amount_of_purchase_SPD'),
            'Actual_purchase_amount_SPD' => Yii::t('app', 'Actual_purchase_amount_SPD'),
            'WGR' => Yii::t('app', 'WGR'),
            'Picture_above_WGR' => Yii::t('app', 'Picture_above_WGR'),
            'Number_WGR' => Yii::t('app', 'Number_WGR'),
            'Recommended_model_WGR' => Yii::t('app', 'Recommended_model_WGR'),
            'Competitor_WGR' => Yii::t('app', 'Competitor_WGR'),
            'Tracking_progress_WGR' => Yii::t('app', 'Tracking_progress_WGR'),
            'Estimated_amount_of_purchase_WGR' => Yii::t('app', 'Estimated_amount_of_purchase_WGR'),
            'Actual_purchase_amount_WGR' => Yii::t('app', 'Actual_purchase_amount_WGR'),
        ];
    }

}
