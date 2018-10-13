<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblclassDivision;

/**
 * TblclassDivisionSearch represents the model behind the search form about `backend\models\TblclassDivision`.
 */
class TblclassDivisionSearch extends TblclassDivision
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_id', 'class_no', 'isDeleted'], 'integer'],
            [['class_name', 'class_division', 'insert_date', 'update_date', 's_id'], 'safe'],
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
        $query = TblclassDivision::find()->where(["tblclass_division.isDeleted"=>0]);
        $query->leftJoin('tblschool_info','tblschool_info.s_id = tblclass_division.s_id');

        // $query->joinWith(['school']);

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
            'class_id' => $this->class_id,
            'class_no' => $this->class_no,
            'insert_date' => $this->insert_date,
            'update_date' => $this->update_date,
            // 'isDeleted' => 0,
            // 's_id' => $this->s_id,
        ]);

        $query->andFilterWhere(['like', 'class_name', $this->class_name])
            ->andFilterWhere(['like', 'class_division', $this->class_division])
            ->andFilterWhere(['like', 'tblschool_info.s_name', $this->s_id]);

        return $dataProvider;
    }
}
