<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\EmailSetting;

/**
 * EmailSettingSearch represents the model behind the search form about `backend\models\EmailSetting`.
 */
class EmailSettingSearch extends EmailSetting
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email_setting_id', 'ssl'], 'integer'],
            [['host_name', 'host_user', 'host_password', 'host_port', 's_id'], 'safe'],
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
        $query = EmailSetting::find();
        $query->leftJoin('tblschool_info','tblschool_info.s_id = email_setting.s_id');

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
            'email_setting_id' => $this->email_setting_id,
            'ssl' => $this->ssl,
            //'s_id' => $this->s_id,
        ]);

        $query->andFilterWhere(['like', 'host_name', $this->host_name])
            ->andFilterWhere(['like', 'host_user', $this->host_user])
            ->andFilterWhere(['like', 'host_password', $this->host_password])
            ->andFilterWhere(['like', 'host_port', $this->host_port])
            ->andFilterWhere(['like', 'tblschool_info.s_name', $this->s_id]);

        return $dataProvider;
    }
}
