<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblloginHistory;

/**
 * TblloginHistorySearch represents the model behind the search form about `backend\models\TblloginHistory`.
 */
class TblloginHistorySearch extends TblloginHistory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login_history_id', 'login_access_id'], 'integer'],
            [['login_date', 'login_time', 'logout_date', 'logout_time'], 'safe'],
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
        $query = TblloginHistory::find();

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
            'login_history_id' => $this->login_history_id,
            'login_access_id' => $this->login_access_id,
            'login_date' => $this->login_date,
            'login_time' => $this->login_time,
            'logout_date' => $this->logout_date,
            'logout_time' => $this->logout_time,
        ]);

        return $dataProvider;
    }
}
