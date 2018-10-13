<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tblsms_setting".
 *
 * @property integer $sms_id
 * @property string $sender_id
 * @property string $sms_url
 * @property string $user_name
 * @property string $password
 * @property string $route
 * @property integer $s_id
 * @property string $insert_date
 * @property string $update_date
 * @property integer $isDeleted
 *
 * @property TblschoolInfo $s
 */
class TblsmsSetting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblsms_setting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sender_id', 'sms_url', 'user_name', 'password', 'route', 's_id'], 'required'],
            [['s_id', 'isDeleted'], 'integer'],
            [['insert_date', 'update_date'], 'safe'],
            [['sender_id', 'password', 'route'], 'string', 'max' => 50],
            [['sms_url'], 'string', 'max' => 255],
            [['user_name'], 'string', 'max' => 100],
            [['s_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblschoolInfo::className(), 'targetAttribute' => ['s_id' => 's_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sms_id' => 'Sms ID',
            'sender_id' => 'Sender ID',
            'sms_url' => 'Sms Url',
            'user_name' => 'User Name',
            'password' => 'Password',
            'route' => 'Route',
            's_id' => 'School Name',
            'insert_date' => 'Insert Date',
            'update_date' => 'Update Date',
            'isDeleted' => 'Is Deleted',
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
