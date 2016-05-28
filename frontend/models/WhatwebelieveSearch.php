<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Whatwebelieve;

/**
 * WhatwebelieveSearch represents the model behind the search form about `frontend\models\Whatwebelieve`.
 */
class WhatwebelieveSearch extends Whatwebelieve
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['what_id', 'order'], 'integer'],
            [['type', 'body', 'verse'], 'safe'],
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
        $query = Whatwebelieve::find();

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
            'what_id' => $this->what_id,
            'order' => $this->order,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'body', $this->body])
            ->andFilterWhere(['like', 'verse', $this->verse]);

        return $dataProvider;
    }
}
