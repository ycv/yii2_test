<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2test_projectreport".
 *
 * @property integer $id
 * @property string $number
 * @property string $entry_name
 * @property string $region
 * @property string $address
 * @property string $Industry_owned
 * @property string $Investment_unit
 * @property string $Scale
 * @property string $Party_a_contact
 * @property string $Telephone
 * @property string $Design_unit
 * @property string $Designer
 * @property string $Design_Institute_tracking_people
 * @property string $Engineering_progress
 * @property string $medium_voltage_id
 * @property string $Low_voltage_cabinet_id
 * @property string $Box_three_id
 * @property string $Visiting_record
 * @property string $Update_date
 * @property string $KA_estate_agent
 * @property string $Join_TOP
 * @property string $Exit_Top
 */
class Yii2TestProjectreport extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'yii2test_projectreport';
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
            'number' => Yii::t('app', 'number'),
            'entry_name' => Yii::t('app', 'entry_name'),
            'region' => Yii::t('app', 'region'),
            'address' => Yii::t('app', 'address'),
            'Industry_owned' => Yii::t('app', 'Industry_owned'),
            'Investment_unit' => Yii::t('app', 'Investment_unit'),
            'Scale' => Yii::t('app', 'Scale'),
            'Party_a_contact' => Yii::t('app', 'Party_a_contact'),
            'Telephone' => Yii::t('app', 'Telephone'),
            'Design_unit' => Yii::t('app', 'Design_unit'),
            'Designer' => Yii::t('app', 'Designer'),
            'Design_Institute_tracking_people' => Yii::t('app', 'Design_Institute_tracking_people'),
            'Engineering_progress' => Yii::t('app', 'Engineering_progress'),
            'medium_voltage_id' => Yii::t('app', 'medium_voltage_id'),
            'Low_voltage_cabinet_id' => Yii::t('app', 'Low_voltage_cabinet_id'),
            'Box_three_id' => Yii::t('app', 'Box_three_id'),
            'Visiting_record' => Yii::t('app', 'Visiting_record'),
            'Update_date' => Yii::t('app', 'Update_date'),
            'KA_estate_agent' => Yii::t('app', 'KA_estate_agent'),
            'Join_TOP' => Yii::t('app', 'Join_TOP'),
            'Exit_Top' => Yii::t('app', 'Exit_Top'),
        ];
    }

}
