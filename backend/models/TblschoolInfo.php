<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tblschool_info".
 *
 * @property integer $s_id
 * @property string $s_name
 * @property string $s_code
 * @property string $s_address
 * @property string $s_establishment_date
 * @property string $s_phone_number
 * @property string $s_owner_name
 * @property string $s_owner_contact_no
 * @property string $s_email
 * @property string $password
 * @property string $s_summery
 * @property resource $s_logo
 * @property double $s_map1_lat
 * @property double $s_map1_longitude
 * @property double $s_map2_lat
 * @property double $s_map2_logitude
 * @property string $insert_date
 * @property string $update_date
 * @property integer $isDeleted
 *
 * @property EmailSetting[] $emailSettings
 * @property TblclassDivision[] $tblclassDivisions
 * @property Tbldepartment[] $tbldepartments
 * @property Tblemployee[] $tblemployee
 * @property TblemployeeAttendance[] $tblemployeeAttendances
 * @property TblsetLatlongSchool[] $tblsetLatlongSchools
 * @property TblsmsSetting[] $tblsmsSettings
 * @property TblstudAttendance[] $tblstudAttendances
 * @property TblstudentRegistration[] $TblstudentRegistration
 */
class TblschoolInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblschool_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['s_name', 's_code', 's_address', 's_establishment_date', 's_phone_number', 's_owner_name', 's_owner_contact_no', 's_email', 'password','s_summery'], 'required'],
            [['s_establishment_date', 'insert_date', 'update_date'], 'safe'],
           // [['s_logo'], 'string'],
            [['s_map1_lat', 's_map1_longitude', 's_map2_lat', 's_map2_logitude'], 'number'],
            [['isDeleted', 'password'], 'integer'],
            [['s_email'],'email'],
            [['s_email'],'unique'],
            [['s_name'], 'string', 'max' => 200],
            [['s_code', 's_owner_name'], 'string', 'max' => 50],
            [['s_address', 's_summery'], 'string', 'max' => 255],
            [['s_phone_number', 's_owner_contact_no'], 'string', 'max' => 20],
            [['s_email'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            's_id' => 'School ID',
            's_name' => 'School Name',
            's_code' => 'School Code',
            's_address' => 'Address',
            's_establishment_date' => 'Establishment Date',
            's_phone_number' => 'Phone Number',
            's_owner_name' => 'Owner Name',
            's_owner_contact_no' => 'Owner Contact No',
            's_email' => 'Email',
            'password' =>'Password',
            's_summery' => 'Summery',
            's_logo' => 'Logo',
            's_map1_lat' => 'Map1 Latitude',
            's_map1_longitude' => 'Map1 Longitude',
            's_map2_lat' => 'Map2 Latitude',
            's_map2_logitude' => 'Map2 Logitude',
            'insert_date' => 'Insert Date',
            'update_date' => 'Update Date',
            'isDeleted' => 'Is Deleted',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmailSettings()
    {
        return $this->hasMany(EmailSetting::className(), ['s_id' => 's_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblclassDivisions()
    {
        return $this->hasMany(TblclassDivision::className(), ['s_id' => 's_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbldepartments()
    {
        return $this->hasMany(Tbldepartment::className(), ['s_id' => 's_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblemployee()
    {
        return $this->hasMany(TTblemployee::className(), ['s_id' => 's_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblemployeeAttendances()
    {
        return $this->hasMany(TblemployeeAttendance::className(), ['s_id' => 's_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblsetLatlongSchools()
    {
        return $this->hasMany(TblsetLatlongSchool::className(), ['s_id' => 's_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblsmsSettings()
    {
        return $this->hasMany(TblsmsSetting::className(), ['s_id' => 's_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblstudAttendances()
    {
        return $this->hasMany(TblstudAttendance::className(), ['s_id' => 's_id']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblstudentRegistration()
    {
        return $this->hasMany(TblstudentRegistration::className(), ['s_id' => 's_id']);
    }
}
