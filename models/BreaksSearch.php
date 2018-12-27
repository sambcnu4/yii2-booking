<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Breaks;

/**
 * BreaksSearch represents the model behind the search form of `app\models\Breaks`.
 */
class BreaksSearch extends Breaks
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['breaks_id', 'breaks_budget'], 'integer'],
            [['breaks_name'], 'safe'],
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
        $query = Breaks::find();

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
            'breaks_id' => $this->breaks_id,
            'breaks_budget' => $this->breaks_budget,
        ]);

        $query->andFilterWhere(['like', 'breaks_name', $this->breaks_name]);

        return $dataProvider;
    }
}
