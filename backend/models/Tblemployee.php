<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tblemployee".
 *
 * @property integer $emp_id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $email_id
 * @property integer $password
 * @property integer $contact_no
 * @property integer $alt_contact_no
 * @property string $gender
 * @property string $address
 * @property integer $aadar_card_number
 * @property integer $job_code
 * @property string $joining_date
 * @property string $dob
 * @property integer $ui_number
 * @property string $insert_date
 * @property integer $update_date
 * @property integer $isDeleted
 * @property integer $s_id
 * @property integer $dept_id
 *
 * @property Tbldepartment $dept
 * @property TblemployeeAttendance[] $tblemployeeAttendances
 */
class Tblemployee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblemployee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'middle_name', 'last_name', 'email_id', 'password', 'contact_no', 'alt_contact_no', 'gender', 'address', 'aadar_card_number', 'job_code', 'joining_date', 'dob', 'ui_number', 'dept_id'], 'required'],
            [['password', 'contact_no', 'alt_contact_no', 'aadar_card_number', 'job_code', 'ui_number', 'isDeleted', 's_id', 'dept_id'], 'integer'],
            [['email_id'],'email'],
            [['email_id'],'unique'],
            [['joining_date', 'dob', 'insert_date'], 'safe'],
            [['first_name', 'middle_name', 'last_name', 'email_id'], 'string', 'max' => 100],
            [['gender'], 'string', 'max' => 10],
            [['address'], 'string', 'max' => 255],
            [['s_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblschoolInfo::className(), 'targetAttribute' => ['s_id' => 's_id']],
            [['dept_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tbldepartment::className(), 'targetAttribute' => ['dept_id' => 'dept_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'emp_id' => 'Emp ID',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'email_id' => 'Email ID',
            'password' => 'Password',
            'contact_no' => 'Contact No',
            'alt_contact_no' => 'Alt Contact No',
            'gender' => 'Gender',
            'address' => 'Address',
            'aadar_card_number' => 'Aadar Card Number',
            'job_code' => 'Job Code',
            'joining_date' => 'Joining Date',
            'dob' => 'Date of Birth',
            'ui_number' => 'Ui Number',
            'insert_date' => 'Insert Date',
            'update_date' => 'Update Date',
            'isDeleted' => 'Is Deleted',
            's_id' => 'School Name ',
            'dept_id' => 'Department Name',
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
    public function getDepartment()
    {
        return $this->hasOne(Tbldepartment::className(), ['dept_id' => 'dept_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblemployeeAttendances()
    {
        return $this->hasMany(TblemployeeAttendance::className(), ['emp_id' => 'emp_id']);
    }
}
