<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\AdminControl;

/**
 * AdminControlSearch represents the model behind the search form about `backend\models\AdminControl`.
 */
class AdminControlSearch extends AdminControl
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_id', 'admin_visible'], 'integer'],
            [['admin_panel', 'admin_link', 'admin_pic'], 'safe'],
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
        $query = AdminControl::find();

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
            'admin_id' => $this->admin_id,
            'admin_visible' => $this->admin_visible,
        ]);

        $query->andFilterWhere(['like', 'admin_panel', $this->admin_panel])
            ->andFilterWhere(['like', 'admin_link', $this->admin_link])
            ->andFilterWhere(['like', 'admin_pic', $this->admin_pic]);

        return $dataProvider;
    }
}
