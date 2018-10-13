<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblstudentRegistration;

/**
 * TblstudentRegistrationSearch represents the model behind the search form about `backend\models\TblstudentRegistration`.
 */
class TblstudentRegistrationSearch extends TblstudentRegistration
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'password','pincode', 'aadar_card_number', 'ui_number',  'isDeleted'], 'integer'],
            [['first_name', 'middle_name', 'last_name', 'parent_email_id', 'pr_address', 'tmp_address', 'dob', 'parent_contact_no', 'parent_alt_contact_no', 'city', 'mothers_name', 'gender', 'class_id', 's_id','insert_date', 'update_date'], 'safe'],
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
        $query = TblstudentRegistration::find()->where(["tblstudent_registration.isDeleted"=>0]);
        $query->leftJoin('tblschool_info','tblschool_info.s_id=tblstudent_registration.s_id');
        $query->leftJoin('tblclass_division','tblclass_division.class_id=tblstudent_registration.class_id');

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
            'student_id' => $this->student_id,
            'password' => $this->password,
            'dob' => $this->dob,
            'pincode' => $this->pincode,
            'aadar_card_number' => $this->aadar_card_number,
            'ui_number' => $this->ui_number,
            // 'class_id' => $this->class_id,
            'insert_date' => $this->insert_date,
            'update_date' => $this->update_date,
            // 'isDeleted' => $this->isDeleted,
            // 's_id' => $this->s_id,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'parent_email_id', $this->parent_email_id])
            // ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'pr_address', $this->pr_address])
            ->andFilterWhere(['like', 'tmp_address', $this->tmp_address])
            ->andFilterWhere(['like', 'parent_contact_no', $this->parent_contact_no])
            ->andFilterWhere(['like', 'parent_alt_contact_no', $this->parent_alt_contact_no])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'mothers_name', $this->mothers_name])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'tblclass_division.class_name', $this->class_id])
            ->andFilterWhere(['like', 'tblschool_info.s_name', $this->s_id]);

        return $dataProvider;
    }
}
