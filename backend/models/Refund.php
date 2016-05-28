<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "refund".
 *
 * @property integer $refund_id
 * @property string $refund_sub
 * @property string $refund_pg
 */
class Refund extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'refund';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['refund_sub', 'refund_pg'], 'required'],
            [['refund_sub', 'refund_pg'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'refund_id' => 'Refund ID',
            'refund_sub' => 'SubTitle',
            'refund_pg' => 'Paragraph',
        ];
    }
}
