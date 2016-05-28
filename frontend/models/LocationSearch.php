<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Location;

/**
 * LocationSearch represents the model behind the search form about `frontend\models\Location`.
 */
class LocationSearch extends Location
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['loc_id', 'loc_zip'], 'integer'],
            [['loc_street', 'loc_city', 'loc_state', 'loc_back'], 'safe'],
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
        $query = Location::find();

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
            'loc_id' => $this->loc_id,
            'loc_zip' => $this->loc_zip,
        ]);

        $query->andFilterWhere(['like', 'loc_street', $this->loc_street])
            ->andFilterWhere(['like', 'loc_city', $this->loc_city])
            ->andFilterWhere(['like', 'loc_state', $this->loc_state])
            ->andFilterWhere(['like', 'loc_back', $this->loc_back]);

        return $dataProvider;
    }
}
