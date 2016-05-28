<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "footer_menu".
 *
 * @property integer $footer_id
 * @property string $foot_head
 * @property string $foot_link
 * @property string $foot_linkname
 * @property string $foot_pic
 * @property integer $foot_visible
 */
class FooterMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'footer_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['foot_head', 'foot_link', 'foot_linkname', 'foot_pic'], 'required'],
            [['foot_visible'], 'integer'],
            [['foot_head', 'foot_link', 'foot_linkname', 'foot_pic'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'footer_id' => Yii::t('app', 'Footer ID'),
            'foot_head' => Yii::t('app', 'Foot Head'),
            'foot_link' => Yii::t('app', 'Foot Link'),
            'foot_linkname' => Yii::t('app', 'Foot Linkname'),
            'foot_pic' => Yii::t('app', 'Foot Pic'),
            'foot_visible' => Yii::t('app', 'Foot Visible'),
        ];
    }
}
