<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tblstudent_registration".
 *
 * @property integer $student_id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $parent_email_id
 * @property string $password
 * @property string $pr_address
 * @property string $tmp_address
 * @property string $dob
 * @property string $parent_contact_no
 * @property string $parent_alt_contact_no
 * @property string $city
 * @property integer $pincode
 * @property integer $aadar_card_number
 * @property integer $ui_number
 * @property string $mothers_name
 * @property string $gender
 * @property integer $class_id
 * @property string $insert_date
 * @property string $update_date
 * @property integer $isDeleted
 * @property integer $s_id
 *
 * @property TblstudAttendance[] $tblstudAttendances
 * @property TblclassDivision $class
 */
class TblstudentRegistration extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblstudent_registration';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'middle_name', 'last_name', 'parent_email_id', 'password', 'pr_address', 'tmp_address', 'dob', 'parent_contact_no', 'parent_alt_contact_no', 'city', 'pincode', 'aadar_card_number', 'ui_number', 'mothers_name', 'gender', 'class_id', 's_id'], 'required'],
            [['dob', 'insert_date', 'update_date'], 'safe'],
            [['password','pincode', 'aadar_card_number', 'ui_number', 'class_id', 'isDeleted', 's_id'], 'integer'],
            [['first_name', 'middle_name', 'last_name'], 'string', 'max' => 50],
            [['parent_email_id'], 'string', 'max' => 100],
            [['parent_email_id'],'email'],
            [['parent_email_id'],'unique'],
            [['pr_address', 'tmp_address'], 'string', 'max' => 255],
            [['parent_contact_no', 'parent_alt_contact_no', 'city', 'mothers_name'], 'string', 'max' => 15],
            [['gender'], 'string', 'max' => 10],
            [['class_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblclassDivision::className(), 'targetAttribute' => ['class_id' => 'class_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'parent_email_id' => 'Parent Email ID',
            'password' => 'Password',
            'pr_address' => 'Permanent Address',
            'tmp_address' => 'Present Address',
            'dob' => 'Dob',
            'parent_contact_no' => 'Parent Contact No',
            'parent_alt_contact_no' => 'Parent Alt Contact No',
            'city' => 'City',
            'pincode' => 'Pincode',
            'aadar_card_number' => 'Aadar Card Number',
            'ui_number' => 'Ui Number',
            'mothers_name' => 'Mothers Name',
            'gender' => 'Gender',
            'class_id' => 'Class Name',
            'insert_date' => 'Insert Date',
            'update_date' => 'Update Date',
            'isDeleted' => 'Is Deleted',
            's_id' => 'S Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblstudAttendances()
    {
        return $this->hasMany(TblstudAttendance::className(), ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClass()
    {
        return $this->hasOne(TblclassDivision::className(), ['class_id' => 'class_id']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchool()
    {
        return $this->hasOne(TblschoolInfo::className(), ['s_id' => 's_id']);
    }
}
