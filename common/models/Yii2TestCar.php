<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2Test_car".
 *
 * @property integer $ID
 * @property string $FIRST_LETTER
 * @property string $MAKE_NAME
 * @property string $MODEL_SERIES
 * @property string $MODEL_NAME
 * @property string $TYPE_SERIES
 * @property string $TYPE_NAME
 * @property string $COUNTRY
 * @property string $TECHNOLOGY
 * @property string $VEHICLE_CLASS
 * @property string $ENGINE_CAPACITY
 * @property string $TRANSMISSION
 */
class Yii2TestCar extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'yii2Test_car';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['ID'], 'integer'],
            [['FIRST_LETTER', 'MAKE_NAME', 'MODEL_SERIES', 'MODEL_NAME', 'TYPE_SERIES', 'TYPE_NAME'], 'string', 'max' => 381],
            [['COUNTRY'], 'string', 'max' => 9],
            [['TECHNOLOGY'], 'string', 'max' => 6],
            [['VEHICLE_CLASS', 'TRANSMISSION'], 'string', 'max' => 12],
            [['ENGINE_CAPACITY'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'ID' => Yii::t('app', 'ID'),
            'FIRST_LETTER' => Yii::t('app', 'First  Letter'),
            'MAKE_NAME' => Yii::t('app', 'Make  Name'),
            'MODEL_SERIES' => Yii::t('app', 'Model  Series'),
            'MODEL_NAME' => Yii::t('app', 'Model  Name'),
            'TYPE_SERIES' => Yii::t('app', 'Type  Series'),
            'TYPE_NAME' => Yii::t('app', 'Type  Name'),
            'COUNTRY' => Yii::t('app', 'Country'),
            'TECHNOLOGY' => Yii::t('app', 'Technology'),
            'VEHICLE_CLASS' => Yii::t('app', 'Vehicle  Class'),
            'ENGINE_CAPACITY' => Yii::t('app', 'Engine  Capacity'),
            'TRANSMISSION' => Yii::t('app', 'Transmission'),
        ];
    }

}
