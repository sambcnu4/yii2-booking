<?php

namespace app\modules\contact\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\contact\models\YellowPage;

/**
 * YellowPageSearch represents the model behind the search form of `app\modules\contact\models\YellowPage`.
 */
class YellowPageSearch extends YellowPage
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'departments_id', 'status_id'], 'integer'],
            [['contact_name', 'position', 'location', 'email', 'ip_phone', 'tel1', 'tel2', 'tel3', 'mvpn', 'direct_line', 'fax'], 'safe'],
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
        $query = YellowPage::find();

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
            'departments_id' => $this->departments_id,
            'status_id' => $this->status_id,
        ]);

        $query->andFilterWhere(['like', 'contact_name', $this->contact_name])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'ip_phone', $this->ip_phone])
            ->andFilterWhere(['like', 'tel1', $this->tel1])
            ->andFilterWhere(['like', 'tel2', $this->tel2])
            ->andFilterWhere(['like', 'tel3', $this->tel3])
            ->andFilterWhere(['like', 'mvpn', $this->mvpn])
            ->andFilterWhere(['like', 'direct_line', $this->direct_line])
            ->andFilterWhere(['like', 'fax', $this->fax]);

        return $dataProvider;
    }
}
