<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BookingStatus;

/**
 * BookingStatusSearch represents the model behind the search form of `app\models\BookingStatus`.
 */
class BookingStatusSearch extends BookingStatus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['booking_status_id'], 'integer'],
            [['booking_status_name', 'booking_statust_color'], 'safe'],
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
        $query = BookingStatus::find();

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
            'booking_status_id' => $this->booking_status_id,
        ]);

        $query->andFilterWhere(['like', 'booking_status_name', $this->booking_status_name])
            ->andFilterWhere(['like', 'booking_statust_color', $this->booking_statust_color]);

        return $dataProvider;
    }
}
