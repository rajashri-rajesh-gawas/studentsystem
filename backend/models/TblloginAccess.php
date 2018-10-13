<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbllogin_access".
 *
 * @property integer $login_access_id
 * @property integer $s_id
 * @property integer $emp_id
 * @property integer $student_id
 * @property string $email_id
 * @property string $password
 * @property string $user_type
 * @property integer $is_deleted
 *
 * @property TblloginHistory[] $tblloginHistories
 */
class TblloginAccess extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbllogin_access';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['s_id','emp_id', 'student_id', 'email_id', 'password', 'user_type', 'is_deleted'], 'required'],
            [['s_id','emp_id', 'student_id', 'is_deleted'], 'integer'],
            [['email_id'], 'string', 'max' => 100],
            [['email_id'],'email'],
            [['email_id'],'unique'],
            [['password'], 'string', 'max' => 50],
            [['user_type'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'login_access_id' => 'Login Access ID',
            's_id' => 'S ID',
            'emp_id' => 'Employee ID',
            'student_id' => 'Student ID',
            'email_id' => 'Email ID',
            'password' => 'Password',
            'user_type' => 'User Type',
            'is_deleted' => 'Is Deleted',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblloginHistories()
    {
        return $this->hasMany(TblloginHistory::className(), ['login_access_id' => 'login_access_id']);
    }
}
