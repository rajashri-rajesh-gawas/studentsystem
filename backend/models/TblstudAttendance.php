<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tblstud_attendance".
 *
 * @property integer $attend_id
 * @property integer $student_id
 * @property string $lat_map1
 * @property string $long_map1
 * @property string $login_time
 * @property string $login_date
 * @property string $logout_time
 * @property string $logout_date
 * @property string $lat_map2
 * @property string $long_map2
 * @property string $insert_date
 * @property string $update_date
 * @property integer $isDeleted
 * @property integer $s_id
 *
 * @property TblschoolInfo $s
 * @property TblstudentRegistration $student
 */
class TblstudAttendance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblstud_attendance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['student_id', 'lat_map1', 'long_map1', 'login_time', 'login_date', 'logout_time', 'logout_date', 'lat_map2', 'long_map2', 'insert_date', 'update_date', 'isDeleted', 's_id'], 'required'],
            [['student_id','login_time', 'login_date', 's_id'], 'required'],
            [['student_id', 'isDeleted', 's_id'], 'integer'],
            [['login_time', 'login_date', 'logout_time', 'logout_date', 'insert_date', 'update_date'], 'safe'],
            [['lat_map1', 'long_map1', 'lat_map2', 'long_map2'], 'string', 'max' => 255],
            [['s_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblschoolInfo::className(), 'targetAttribute' => ['s_id' => 's_id']],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblstudentRegistration::className(), 'targetAttribute' => ['student_id' => 'student_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'attend_id' => 'Attend ID',
            'student_id' => 'Student Name',
            'lat_map1' => 'Lat Map1',
            'long_map1' => 'Long Map1',
            'login_time' => 'Login Time',
            'login_date' => 'Login Date',
            'logout_time' => 'Logout Time',
            'logout_date' => 'Logout Date',
            'lat_map2' => 'Lat Map2',
            'long_map2' => 'Long Map2',
            'insert_date' => 'Insert Date',
            'update_date' => 'Update Date',
            'isDeleted' => 'Is Deleted',
            's_id' => 'S Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchool()
    {
        return $this->hasOne(TblschoolInfo::className(), ['s_id' => 's_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(TblstudentRegistration::className(), ['student_id' => 'student_id']);
    }
}
