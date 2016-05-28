<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "healthquestions".
 *
 * @property integer $healthq_id
 * @property integer $user_id
 * @property string $question1
 * @property string $answer1
 */
class HealthQuestions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'healthquestions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'question1', 'answer1'], 'required'],
            [['user_id'], 'integer'],
            [['question1', 'answer1'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'healthq_id' => 'Healthq ID',
            'user_id' => 'User ID',
            'question1' => 'Question1',
            'answer1' => 'Answer1',
        ];
    }
}
