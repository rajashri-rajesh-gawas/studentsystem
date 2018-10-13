<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TbltrackingHistory;

/**
 * TbltrackingHistorySearch represents the model behind the search form about `backend\models\TbltrackingHistory`.
 */
class TbltrackingHistorySearch extends TbltrackingHistory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tracking_id', 'speed', 'ui_id'], 'integer'],
            [['lat', 'longitude', 'insert_date', 'insert_time'], 'safe'],
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
        $query = TbltrackingHistory::find();

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
            'tracking_id' => $this->tracking_id,
            'speed' => $this->speed,
            'ui_id' => $this->ui_id,
            'insert_date' => $this->insert_date,
            'insert_time' => $this->insert_time,
        ]);

        $query->andFilterWhere(['like', 'lat', $this->lat])
            ->andFilterWhere(['like', 'longitude', $this->longitude]);

        return $dataProvider;
    }
}
