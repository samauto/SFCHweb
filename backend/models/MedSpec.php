<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "med_spec".
 *
 * @property integer $medspec_id
 * @property string $special
 * @property string $description
 * @property integer $display
 */
class MedSpec extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'med_spec';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['display'], 'integer'],
            [['special'], 'string', 'max' => 38],
            [['description'], 'string', 'max' => 425],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'medspec_id' => Yii::t('app', 'Medspec ID'),
            'special' => Yii::t('app', 'Special'),
            'description' => Yii::t('app', 'Description'),
            'display' => Yii::t('app', 'Display'),
        ];
    }
}
