<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2test_boxthree".
 *
 * @property integer $id
 * @property integer $Disk_factory_situation
 * @property integer $Estimated_time_of_purchase
 * @property integer $ATS
 * @property integer $Picture_above
 * @property integer $Number
 * @property integer $Recommended_model
 * @property integer $Competitor
 * @property integer $Tracking_progress
 * @property integer $Estimated_amount_of_purchase
 * @property integer $Actual_purchase_amount
 * @property integer $WEFP
 * @property integer $Picture_above_WEFP
 * @property integer $Number_WEFP
 * @property integer $Recommended_model_WEFP
 * @property integer $Competitor_WEFP
 * @property integer $Tracking_progress_WEFP
 * @property integer $Estimated_amount_of_purchase_WEFP	
 * @property integer $Actual_purchase_amount_WEFP
 * @property integer $WPFP
 * @property integer $Picture_above_WPFP
 * @property integer $Number_WPFP
 * @property integer $Recommended_model_WPFP
 * @property integer $Competitor_WPFP
 * @property integer $Tracking_progress_WPFP
 * @property integer $Estimated_amount_of_purchase_WPFP
 * @property integer $Actual_purchase_amount_WPFP
 * @property integer $ISCB
 * @property integer $Picture_above_ISCB
 * @property integer $Number_ISCB
 * @property integer $Recommended_model_ISCB
 * @property integer $Competitor_ISCB
 * @property integer $Tracking_progress_ISCB
 * @property integer $Estimated_amount_of_purchase_ISCB
 * @property integer $Actual_purchase_amount_ISCB
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
 * @property integer $iARC
 * @property integer $Picture_above_iARC
 * @property integer $Number_iARC
 * @property integer $Recommended_model_iARC
 * @property integer $Competitor_iARC
 * @property integer $Tracking_progress_iARC
 * @property integer $Estimated_amount_of_purchase_iARC
 * @property integer $Actual_purchase_amount_iARC
 */
class Yii2TestBoxthree extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'yii2test_boxthree';
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
            'Estimated_time_of_purchase' => Yii::t('app', 'Estimated_time_of_purchase'), //预计采购时间
            'ATS' => Yii::t('app', 'ATS'),
            'Picture_above' => Yii::t('app', 'Picture_above'),
            'Number' => Yii::t('app', 'Number'),
            'Recommended_model' => Yii::t('app', 'Recommended_model'),
            'Competitor' => Yii::t('app', 'Competitor'),
            'Tracking_progress' => Yii::t('app', 'Tracking_progress'),
            'Estimated_amount_of_purchase' => Yii::t('app', 'Estimated_amount_of_purchase'),
            'Actual_purchase_amount' => Yii::t('app', 'Actual_purchase_amount'),
            'WEFP' => Yii::t('app', 'WEFP'),
            'Picture_above_WEFP' => Yii::t('app', 'Picture_above_WEFP'),
            'Number_WEFP' => Yii::t('app', 'Number_WEFP'),
            'Recommended_model_WEFP' => Yii::t('app', 'Recommended_model_WEFP'),
            'Competitor_WEFP' => Yii::t('app', 'Competitor_WEFP'),
            'Tracking_progress_WEFP' => Yii::t('app', 'Tracking_progress_WEFP'),
            'Estimated_amount_of_purchase_WEFP' => Yii::t('app', 'Estimated_amount_of_purchase_WEFP'),
            'Actual_purchase_amount_WEFP' => Yii::t('app', 'Actual_purchase_amount_WEFP'),
            'WPFP' => Yii::t('app', 'WPFP'),
            'Picture_above_WPFP' => Yii::t('app', 'Picture_above_WPFP'),
            'Number_WPFP' => Yii::t('app', 'Number_WPFP'),
            'Recommended_model_WPFP' => Yii::t('app', 'Recommended_model_WPFP'),
            'Competitor_WPFP' => Yii::t('app', 'Competitor_WPFP'),
            'Tracking_progress_WPFP' => Yii::t('app', 'Tracking_progress_WPFP'),
            'Estimated_amount_of_purchase_WPFP' => Yii::t('app', 'Estimated_amount_of_purchase_WPFP'),
            'Actual_purchase_amount_WPFP' => Yii::t('app', 'Actual_purchase_amount_WPFP'),
            'ISCB' => Yii::t('app', 'ISCB'),
            'Picture_above_ISCB' => Yii::t('app', 'Picture_above_ISCB'),
            'Number_ISCB' => Yii::t('app', 'Number_ISCB'),
            'Recommended_model_ISCB' => Yii::t('app', 'Recommended_model_ISCB'),
            'Competitor_ISCB' => Yii::t('app', 'Competitor_ISCB'),
            'Tracking_progress_ISCB' => Yii::t('app', 'Tracking_progress_ISCB'),
            'Estimated_amount_of_purchase_ISCB' => Yii::t('app', 'Estimated_amount_of_purchase_ISCB'),
            'Actual_purchase_amount_ISCB' => Yii::t('app', 'Actual_purchase_amount_ISCB'),
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
            'iARC' => Yii::t('app', 'iARC'),
            'Picture_above_iARC' => Yii::t('app', 'Picture_above_iARC'),
            'Number_iARC' => Yii::t('app', 'Number_iARC'),
            'Recommended_model_iARC' => Yii::t('app', 'Recommended_model_iARC'),
            'Competitor_iARC' => Yii::t('app', 'Competitor_iARC'),
            'Tracking_progress_iARC' => Yii::t('app', 'Tracking_progress_iARC'),
            'Estimated_amount_of_purchase_iARC' => Yii::t('app', 'Estimated_amount_of_purchase_iARC'),
            'Actual_purchase_amount_iARC' => Yii::t('app', 'Actual_purchase_amount_iARC'),
        ];
    }

}
