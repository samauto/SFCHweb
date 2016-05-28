<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "aboutustype".
 *
 * @property integer $aboutustype_id
 * @property string $type
 */
class AboutUsType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aboutustype';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['orderoftype'], 'integer'],
            [['type'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'aboutustype_id' => 'AboutUs Type ID',
            'type' => 'Sub Title',
            'orderoftype' => 'Order of Sub Title'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAboutUs()
    {
        return $this->hasMany(Aboutus::className(), ['aboutustype_id' => 'aboutustype_id']);
    }
}
