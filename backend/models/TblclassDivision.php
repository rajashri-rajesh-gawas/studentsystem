<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tblclass_division".
 *
 * @property integer $class_id
 * @property string $class_name
 * @property string $class_division
 * @property integer $class_no
 * @property string $insert_date
 * @property string $update_date
 * @property integer $isDeleted
 * @property integer $s_id
 *
 * @property TblschoolInfo $s
 * @property TblstudentRegistration[] $tblstudentRegistrations
 */
class TblclassDivision extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblclass_division';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_name', 'class_division', 'class_no'], 'required'],
            [['class_no', 'isDeleted', 's_id'], 'integer'],
            [['insert_date', 'update_date'], 'safe'],
            [['class_name'], 'string', 'max' => 100],
            [['class_division'], 'string', 'max' => 10],
            [['s_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblschoolInfo::className(), 'targetAttribute' => ['s_id' => 's_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'class_id' => 'Class ID',
            'class_name' => 'Class Name',
            'class_division' => 'Class Division',
            'class_no' => 'Class No',
            // 'insert_date' => Yii::t('app','Insert Date'),
            // 'update_date' => Yii::t('app','Update Date'),
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
    public function getTblstudentRegistrations()
    {
        return $this->hasMany(TblstudentRegistration::className(), ['class_id' => 'class_id']);
    }
}
