<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "location".
 *
 * @property integer $loc_id
 * @property string $loc_street
 * @property string $loc_city
 * @property string $loc_state
 * @property integer $loc_zip
 * @property string $loc_back
 */
class Location extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'location';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['loc_street', 'loc_city', 'loc_state', 'loc_zip', 'loc_back'], 'required'],
            [['loc_zip'], 'integer'],
            [['loc_street', 'loc_back'], 'string', 'max' => 255],
            [['loc_city', 'loc_state'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'loc_id' => Yii::t('app', 'Loc ID'),
            'loc_street' => Yii::t('app', 'Loc Street'),
            'loc_city' => Yii::t('app', 'Loc City'),
            'loc_state' => Yii::t('app', 'Loc State'),
            'loc_zip' => Yii::t('app', 'Loc Zip'),
            'loc_back' => Yii::t('app', 'Loc Back'),
        ];
    }
}
