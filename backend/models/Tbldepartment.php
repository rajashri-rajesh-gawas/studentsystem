<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbldepartment".
 *
 * @property integer $dept_id
 * @property string $dept_name
 * @property integer $dept_code
 * @property string $insert_date
 * @property string $update_date
 * @property integer $isDeleted
 * @property integer $s_id
 *
 * @property TblschoolInfo $s
 * @property Tblemployee[] $tblemployees
 */
class Tbldepartment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbldepartment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dept_name', 'dept_code', 's_id'], 'required'],
            [['dept_code', 'isDeleted', 's_id'], 'integer'],
            [['insert_date', 'update_date'], 'safe'],
            [['dept_name'], 'string', 'max' => 100],
            [['s_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblschoolInfo::className(), 'targetAttribute' => ['s_id' => 's_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dept_id' => 'Department ID',
            'dept_name' => 'Department Name',
            'dept_code' => 'Department Code',
            'insert_date' => 'Insert Date',
            'update_date' => 'Update Date',
            'isDeleted' => 'Is Deleted',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblemployees()
    {
        return $this->hasMany(Tblemployee::className(), ['dept_id' => 'dept_id']);
    }
}
