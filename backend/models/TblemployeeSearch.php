<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Tblemployee;

/**
 * TblemployeeSearch represents the model behind the search form about `backend\models\Tblemployee`.
 */
class TblemployeeSearch extends Tblemployee
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emp_id', 'password', 'contact_no', 'alt_contact_no', 'aadar_card_number', 'job_code', 'ui_number', 'update_date', 'isDeleted'], 'integer'],
            [['first_name', 'middle_name', 'last_name', 'email_id', 'gender', 'address', 'joining_date', 'dob', 'insert_date', 's_id', 'dept_id'], 'safe'],
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
        $query = Tblemployee::find()->where(["tblemployee.isDeleted"=>0]);
        $query->leftJoin('tblschool_info','tblschool_info.s_id=tblemployee.s_id');
        $query->leftJoin('tbldepartment','tbldepartment.dept_id=tblemployee.dept_id');

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
            'emp_id' => $this->emp_id,
            'password' => $this->password,
            'contact_no' => $this->contact_no,
            'alt_contact_no' => $this->alt_contact_no,
            'aadar_card_number' => $this->aadar_card_number,
            'job_code' => $this->job_code,
            'joining_date' => $this->joining_date,
            'dob' => $this->dob,
            'ui_number' => $this->ui_number,
            'insert_date' => $this->insert_date,
            'update_date' => $this->update_date,
            // 'isDeleted' => 0,
            // 's_id' => $this->s_id,
            // 'dept_id' => $this->dept_id,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'email_id', $this->email_id])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'tblschool_info.s_name', $this->s_id])
            ->andFilterWhere(['like', 'tbldepartment.dept_name', $this->dept_id]);

        return $dataProvider;
    }
}
