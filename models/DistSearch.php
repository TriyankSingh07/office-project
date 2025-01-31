<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dist;

/**
 * DistSearch represents the model behind the search form of `app\models\Dist`.
 */
class DistSearch extends Dist
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id','state_id'], 'integer'],    //remove state_id 
            [['dist_name', 'state_name','status'], 'safe'],  //name=dist_name
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Dist::find();

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
            'id' => $this->id,
            'state_name' => $this->state_name,
        ]);

        $query->andFilterWhere(['like', 'dist_name', $this->dist_name])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
