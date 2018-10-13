<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblschoolInfo;

/**
 * TblschoolInfoSearch represents the model behind the search form about `backend\models\TblschoolInfo`.
 */
class TblschoolInfoSearch extends TblschoolInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['s_id', 'isDeleted'], 'integer'],
            [['s_name', 's_code', 's_address', 's_establishment_date', 's_phone_number', 's_owner_name', 's_owner_contact_no', 's_email', 's_summery', 's_logo', 'insert_date', 'update_date'], 'safe'],
            [['s_map1_lat', 's_map1_longitude', 's_map2_lat', 's_map2_logitude'], 'number'],
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
        $query = TblschoolInfo::find();

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
            's_id' => $this->s_id,
            's_establishment_date' => $this->s_establishment_date,
            's_map1_lat' => $this->s_map1_lat,
            's_map1_longitude' => $this->s_map1_longitude,
            's_map2_lat' => $this->s_map2_lat,
            's_map2_logitude' => $this->s_map2_logitude,
            'insert_date' => $this->insert_date,
            'update_date' => $this->update_date,
            'isDeleted' => 0,
        ]);

        $query->andFilterWhere(['like', 's_name', $this->s_name])
            ->andFilterWhere(['like', 's_code', $this->s_code])
            ->andFilterWhere(['like', 's_address', $this->s_address])
            ->andFilterWhere(['like', 's_phone_number', $this->s_phone_number])
            ->andFilterWhere(['like', 's_owner_name', $this->s_owner_name])
            ->andFilterWhere(['like', 's_owner_contact_no', $this->s_owner_contact_no])
            ->andFilterWhere(['like', 's_email', $this->s_email])
            ->andFilterWhere(['like', 's_summery', $this->s_summery])
            ->andFilterWhere(['like', 's_logo', $this->s_logo]);

        return $dataProvider;
    }
}
