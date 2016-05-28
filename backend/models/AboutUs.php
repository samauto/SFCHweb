<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "aboutus".
 *
 * @property integer $aboutus_id
 * @property integer $aboutustype_id
 * @property string $subsection
 * @property integer $suborder
 *
 * @property Aboutustype $aboutustype
 */
class AboutUs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aboutus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aboutustype_id', 'suborder'], 'integer'],
            [['subsection'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'aboutus_id' => 'Aboutus ID',
            'aboutustype_id' => 'Sub Title',
            'subsection' => 'SubSection',
            'suborder' => 'Order_Of_SubSection',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAboutustype()
    {
        return $this->hasOne(Aboutustype::className(), ['aboutustype_id' => 'aboutustype_id']);
    }
}
