<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "email_setting".
 *
 * @property integer $email_setting_id
 * @property string $host_name
 * @property string $host_user
 * @property string $host_password
 * @property string $host_port
 * @property integer $ssl
 * @property integer $s_id
 *
 * @property TblschoolInfo $s
 */
class EmailSetting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'email_setting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['host_name', 'host_user', 'host_password', 'host_port', 'ssl', 's_id'], 'required'],
            [['ssl', 's_id'], 'integer'],
            [['host_name'], 'string', 'max' => 100],
            [['host_user', 'host_password'], 'string', 'max' => 50],
            [['host_port'], 'string', 'max' => 10],
            [['s_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblschoolInfo::className(), 'targetAttribute' => ['s_id' => 's_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email_setting_id' => 'Email Setting ID',
            'host_name' => 'Host Name',
            'host_user' => 'Host User',
            'host_password' => 'Host Password',
            'host_port' => 'Host Port',
            'ssl' => 'Ssl',
            's_id' => 'School Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchool()
    {
        return $this->hasOne(TblschoolInfo::className(), ['s_id' => 's_id']);
    }
}
