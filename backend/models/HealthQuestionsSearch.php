<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\HealthQuestions;

/**
 * HealthQuestionsSearch represents the model behind the search form about `backend\models\HealthQuestions`.
 */
class HealthQuestionsSearch extends HealthQuestions
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['healthq_id', 'user_id'], 'integer'],
            [['question1', 'answer1', 'question2', 'answer2', 'question3', 'answer3', 'question4', 'answer4', 'question5', 'answer5', 'question6', 'answer6', 'question7', 'answer7', 'question8', 'answer8', 'question9', 'answer9', 'question10', 'answer10'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = HealthQuestions::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'healthq_id' => $this->healthq_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'question1', $this->question1])
            ->andFilterWhere(['like', 'answer1', $this->answer1])
            ->andFilterWhere(['like', 'question2', $this->question2])
            ->andFilterWhere(['like', 'answer2', $this->answer2])
            ->andFilterWhere(['like', 'question3', $this->question3])
            ->andFilterWhere(['like', 'answer3', $this->answer3])
            ->andFilterWhere(['like', 'question4', $this->question4])
            ->andFilterWhere(['like', 'answer4', $this->answer4])
            ->andFilterWhere(['like', 'question5', $this->question5])
            ->andFilterWhere(['like', 'answer5', $this->answer5])
            ->andFilterWhere(['like', 'question6', $this->question6])
            ->andFilterWhere(['like', 'answer6', $this->answer6])
            ->andFilterWhere(['like', 'question7', $this->question7])
            ->andFilterWhere(['like', 'answer7', $this->answer7])
            ->andFilterWhere(['like', 'question8', $this->question8])
            ->andFilterWhere(['like', 'answer8', $this->answer8])
            ->andFilterWhere(['like', 'question9', $this->question9])
            ->andFilterWhere(['like', 'answer9', $this->answer9])
            ->andFilterWhere(['like', 'question10', $this->question10])
            ->andFilterWhere(['like', 'answer10', $this->answer10]);

        return $dataProvider;
    }
}
