<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "leaders".
 *
 * @property integer $lead_id
 * @property string $lead_title
 * @property string $lead_name
 * @property string $lead_body
 * @property string $lead_pic
 * @property string $lead_type
 * @property integer $lead_order
 */
class Leaders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'leaders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lead_title', 'lead_name', 'lead_body', 'lead_pic', 'lead_type', 'lead_order'], 'required'],
            [['lead_order'], 'integer'],
            [['lead_title', 'lead_name', 'lead_body', 'lead_pic', 'lead_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lead_id' => Yii::t('app', 'Lead ID'),
            'lead_title' => Yii::t('app', 'Lead Title'),
            'lead_name' => Yii::t('app', 'Lead Name'),
            'lead_body' => Yii::t('app', 'Lead Body'),
            'lead_pic' => Yii::t('app', 'Lead Pic'),
            'lead_type' => Yii::t('app', 'Lead Type'),
            'lead_order' => Yii::t('app', 'Lead Order'),
        ];
    }
}
