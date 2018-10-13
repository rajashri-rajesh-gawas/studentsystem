<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tblemployee_attendance".
 *
 * @property integer $emp_attend_id
 * @property integer $emp_id
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
 * @property Tblemployee $emp
 * @property TblschoolInfo $s
 */
class TblemployeeAttendance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblemployee_attendance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['emp_id', 'lat_map1', 'long_map1', 'login_time', 'login_date', 'logout_time', 'logout_date', 'lat_map2', 'long_map2', 's_id'], 'required'],
            [['emp_id','login_time', 'login_date', 's_id'], 'required'],
            [['emp_id', 'isDeleted', 's_id'], 'integer'],
            [['login_time', 'login_date', 'logout_time', 'logout_date', 'insert_date', 'update_date'], 'safe'],
            [['lat_map1', 'long_map1', 'lat_map2', 'long_map2'], 'string', 'max' => 255],
            [['emp_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tblemployee::className(), 'targetAttribute' => ['emp_id' => 'emp_id']],
            [['s_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblschoolInfo::className(), 'targetAttribute' => ['s_id' => 's_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'emp_attend_id' => 'Emp Attend ID',
            'emp_id' => 'Employee Name',
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
            's_id' => 'School Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Tblemployee::className(), ['emp_id' => 'emp_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchool()
    {
        return $this->hasOne(TblschoolInfo::className(), ['s_id' => 's_id']);
    }
}
