<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbllogin_history".
 *
 * @property integer $login_history_id
 * @property integer $login_access_id
 * @property string $login_date
 * @property string $login_time
 * @property string $logout_date
 * @property string $logout_time
 *
 * @property TblloginAccess $loginAccess
 */
class TblloginHistory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbllogin_history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login_access_id', 'login_date', 'login_time', 'logout_date', 'logout_time'], 'required'],
            [['login_access_id'], 'integer'],
            [['login_date', 'login_time', 'logout_date', 'logout_time'], 'safe'],
            [['login_access_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblloginAccess::className(), 'targetAttribute' => ['login_access_id' => 'login_access_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'login_history_id' => 'Login History ID',
            'login_access_id' => 'Login Access ID',
            'login_date' => 'Login Date',
            'login_time' => 'Login Time',
            'logout_date' => 'Logout Date',
            'logout_time' => 'Logout Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLoginAccess()
    {
        return $this->hasOne(TblloginAccess::className(), ['login_access_id' => 'login_access_id']);
    }
}
