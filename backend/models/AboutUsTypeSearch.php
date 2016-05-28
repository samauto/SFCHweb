<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\AboutUsType;

/**
 * AboutUsTypeSearch represents the model behind the search form about `backend\models\AboutUsType`.
 */
class AboutUsTypeSearch extends AboutUsType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aboutustype_id'], 'integer'],
            [['type','orderoftype'], 'safe'],
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
        $query = AboutUsType::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'aboutustype_id' => $this->aboutustype_id,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type])
        ->andFilterWhere(['like', 'orderoftype', $this->orderoftype]);

        return $dataProvider;
    }
}
