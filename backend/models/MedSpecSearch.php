<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MedSpec;

/**
 * MedSpecSearch represents the model behind the search form about `backend\models\MedSpec`.
 */
class MedSpecSearch extends MedSpec
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['medspec_id', 'display'], 'integer'],
            [['special', 'description'], 'safe'],
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
        $query = MedSpec::find();

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
            'medspec_id' => $this->medspec_id,
            'display' => $this->display,
        ]);

        $query->andFilterWhere(['like', 'special', $this->special])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
