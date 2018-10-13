<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblloginAccess;

/**
 * TblloginAccessSearch represents the model behind the search form about `backend\models\TblloginAccess`.
 */
class TblloginAccessSearch extends TblloginAccess
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login_access_id', 's_id', 'emp_id', 'student_id', 'is_deleted'], 'integer'],
            [['email_id', 'password', 'user_type'], 'safe'],
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
        $query = TblloginAccess::find();

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
            'login_access_id' => $this->login_access_id,
            's_id' => $this->s_id,
            'emp_id' => $this->emp_id,
            'student_id' => $this->student_id,
            'is_deleted' =>0,
        ]);

        $query->andFilterWhere(['like', 'email_id', $this->email_id])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'user_type', $this->user_type]);

        return $dataProvider;
    }
}
