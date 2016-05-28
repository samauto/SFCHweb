<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "admin_control".
 *
 * @property integer $admin_id
 * @property string $admin_panel
 * @property string $admin_link
 * @property string $admin_pic
 */
class AdminControl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin_control';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_visible'], 'integer'],
            [['admin_panel', 'admin_link', 'admin_pic'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'admin_id' => 'Admin ID',
            'admin_panel' => 'Admin Panel',
            'admin_link' => 'Admin Link',
            'admin_pic' => 'Admin Pic',
            'admin_visible' => 'Admin Visible',
        ];
    }
}
