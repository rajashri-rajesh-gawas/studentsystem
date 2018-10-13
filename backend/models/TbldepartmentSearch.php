<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Tbldepartment;

/**
 * TbldepartmentSearch represents the model behind the search form about `backend\models\Tbldepartment`.
 */
class TbldepartmentSearch extends Tbldepartment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dept_id', 'dept_code', 'isDeleted'], 'integer'],
            [['dept_name', 'insert_date', 'update_date', 's_id'], 'safe'],
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
        $query = Tbldepartment::find()->where(["tbldepartment.isDeleted"=>0]);
        $query->leftJoin('tblschool_info','tblschool_info.s_id = tbldepartment.s_id');

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

        //$query =>joinWith('tblschool_info');

        // grid filtering conditions
        $query->andFilterWhere([
            'dept_id' => $this->dept_id,
            'dept_code' => $this->dept_code,
            'insert_date' => $this->insert_date,
            'update_date' => $this->update_date,
            //'isDeleted' => 0,
            //'s_id' => $this->s_id,
        ]);

        $query->andFilterWhere(['like', 'dept_name', $this->dept_name])
              ->andFilterWhere(['like', 'tblschool_info.s_name', $this->s_id]);

        return $dataProvider;
    }
}
