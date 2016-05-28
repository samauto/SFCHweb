<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Leaders;

/**
 * LeadersSearch represents the model behind the search form about `frontend\models\Leaders`.
 */
class LeadersSearch extends Leaders
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lead_id', 'lead_order'], 'integer'],
            [['lead_title', 'lead_name', 'lead_body', 'lead_pic', 'lead_type'], 'safe'],
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
        $query = Leaders::find();

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
            'lead_id' => $this->lead_id,
            'lead_order' => $this->lead_order,
        ]);

        $query->andFilterWhere(['like', 'lead_title', $this->lead_title])
            ->andFilterWhere(['like', 'lead_name', $this->lead_name])
            ->andFilterWhere(['like', 'lead_body', $this->lead_body])
            ->andFilterWhere(['like', 'lead_pic', $this->lead_pic])
            ->andFilterWhere(['like', 'lead_type', $this->lead_type]);

        return $dataProvider;
    }
}
