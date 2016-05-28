<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "whatwebelieve".
 *
 * @property integer $what_id
 * @property string $type
 * @property string $body
 * @property string $verse
 * @property integer $order
 */
class Whatwebelieve extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'whatwebelieve';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'body', 'verse', 'order'], 'required'],
            [['body'], 'string'],
            [['order'], 'integer'],
            [['type', 'verse'], 'string', 'max' => 255],
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
            'verse' => Yii::t('app', 'Verse'),
            'order' => Yii::t('app', 'Order'),
        ];
    }
}
