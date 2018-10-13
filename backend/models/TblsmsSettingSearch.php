<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblsmsSetting;

/**
 * TblsmsSettingSearch represents the model behind the search form about `backend\models\TblsmsSetting`.
 */
class TblsmsSettingSearch extends TblsmsSetting
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sms_id', 'isDeleted'], 'integer'],
            [['sender_id', 'sms_url', 's_id','user_name', 'password', 'route', 'insert_date', 'update_date'], 'safe'],
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
        $query = TblsmsSetting::find()->where(["tblsms_setting.isDeleted"=>0]);
        $query->leftJoin('tblschool_info','tblschool_info.s_id = tblsms_setting.s_id');

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
            'sms_id' => $this->sms_id,
            //'s_id' => $this->s_id,
            'insert_date' => $this->insert_date,
            'update_date' => $this->update_date,
            // 'isDeleted' => 0,
        ]);

        $query->andFilterWhere(['like', 'sender_id', $this->sender_id])
            ->andFilterWhere(['like', 'sms_url', $this->sms_url])
            ->andFilterWhere(['like', 'user_name', $this->user_name])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'route', $this->route])
            ->andFilterWhere(['like', 'tblschool_info.s_name', $this->s_id]);

        return $dataProvider;
    }
}
