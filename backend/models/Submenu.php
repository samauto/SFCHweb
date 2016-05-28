<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "submenu".
 *
 * @property integer $submenu_id
 * @property string $sub_name
 * @property string $sub_link
 * @property string $sub_pic
 */
class Submenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'submenu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sub_name', 'sub_link', 'sub_pic'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'submenu_id' => 'Submenu ID',
            'sub_name' => 'Name',
            'sub_link' => 'Link',
            'sub_pic' => 'Picture',
        ];
    }
}
