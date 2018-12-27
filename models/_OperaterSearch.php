<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Booking;

/**
 * BookingSearch represents the model behind the search form of `app\models\Booking`.
 */
class BookingSearch extends Booking
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['booking_id', 'booking_room', 'booking_usefor', 'departments_id', 'booking_seate', 'booking_breaks', 'booking_format', 'booking_budget', 'booking_status'], 'integer'],
            [['booking_start', 'booking_end', 'booking_user', 'booking_tel', 'booking_title', 'booking_description', 'booking_cur_date', 'eqipment_notebook', 'eqipment_visualizer', 'eqipment_projector', 'eqipment_tv', 'eqipment_mic1', 'eqipment_mic2', 'eqipment_sound_record', 'eqipment_vdo_record', 'eqipment_photo_record'], 'safe'],
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
        $query = Booking::find();

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
            'booking_id' => $this->booking_id,
            'booking_room' => $this->booking_room,
            'booking_usefor' => $this->booking_usefor,
            'departments_id' => $this->departments_id,
            'booking_seate' => $this->booking_seate,
            'booking_breaks' => $this->booking_breaks,
            'booking_format' => $this->booking_format,
            'booking_budget' => $this->booking_budget,
            'booking_status' => $this->booking_status,
        ]);

        $query->andFilterWhere(['like', 'booking_start', $this->booking_start])
            ->andFilterWhere(['like', 'booking_end', $this->booking_end])
            ->andFilterWhere(['like', 'booking_user', $this->booking_user])
            ->andFilterWhere(['like', 'booking_tel', $this->booking_tel])
            ->andFilterWhere(['like', 'booking_title', $this->booking_title])
            ->andFilterWhere(['like', 'booking_description', $this->booking_description])
            ->andFilterWhere(['like', 'booking_cur_date', $this->booking_cur_date])
            ->andFilterWhere(['like', 'eqipment_notebook', $this->eqipment_notebook])
            ->andFilterWhere(['like', 'eqipment_visualizer', $this->eqipment_visualizer])
            ->andFilterWhere(['like', 'eqipment_projector', $this->eqipment_projector])
            ->andFilterWhere(['like', 'eqipment_tv', $this->eqipment_tv])
            ->andFilterWhere(['like', 'eqipment_mic1', $this->eqipment_mic1])
            ->andFilterWhere(['like', 'eqipment_mic2', $this->eqipment_mic2])
            ->andFilterWhere(['like', 'eqipment_sound_record', $this->eqipment_sound_record])
            ->andFilterWhere(['like', 'eqipment_vdo_record', $this->eqipment_vdo_record])
            ->andFilterWhere(['like', 'eqipment_photo_record', $this->eqipment_photo_record]);

        return $dataProvider;
    }
}
