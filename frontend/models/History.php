<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "history".
 *
 * @property integer $what_id
 * @property string $type
 * @property string $body
 * @property integer $order
 */
class History extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'body', 'order'], 'required'],
            [['body'], 'string'],
            [['order'], 'integer'],
            [['type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'what_id' => Yii::t('app', 'What ID'),
            'type' => Yii::t('app', 'Type'),
            'body' => Yii::t('app', 'Body'),
            'order' => Yii::t('app', 'Order'),
        ];
    }
}
