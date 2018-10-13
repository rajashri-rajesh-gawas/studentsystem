<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblstudAttendance;

/**
 * TblstudAttendanceSearch represents the model behind the search form about `backend\models\TblstudAttendance`.
 */
class TblstudAttendanceSearch extends TblstudAttendance
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['attend_id','isDeleted'], 'integer'],
            [['lat_map1', 'long_map1', 'login_time', 'login_date', 'logout_time', 'logout_date', 'lat_map2', 'long_map2', 'insert_date', 'update_date', 'student_id', 's_id'], 'safe'],
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
        $query = TblstudAttendance::find()->where(["tblstud_attendance.isDeleted"=>0]);
        $query->leftJoin('tblschool_info','tblschool_info.s_id = tblstud_attendance.s_id');
        $query->leftJoin('tblstudent_registration','tblstudent_registration.student_id = tblstud_attendance.student_id');

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
            'attend_id' => $this->attend_id,
            // 'student_id' => $this->student_id,
            'login_time' => $this->login_time,
            'login_date' => $this->login_date,
            'logout_time' => $this->logout_time,
            'logout_date' => $this->logout_date,
            'insert_date' => $this->insert_date,
            'update_date' => $this->update_date,
            // 'isDeleted' => 0,
            // 's_id' => $this->s_id,
        ]);

        $query->andFilterWhere(['like', 'lat_map1', $this->lat_map1])
            ->andFilterWhere(['like', 'long_map1', $this->long_map1])
            ->andFilterWhere(['like', 'lat_map2', $this->lat_map2])
            ->andFilterWhere(['like', 'long_map2', $this->long_map2])
            ->andFilterWhere(['like', 'tblstudent_registration.first_name', $this->student_id])
            ->andFilterWhere(['like', 'tblschool_info.s_name', $this->s_id]);

        return $dataProvider;
    }
}
