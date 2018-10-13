<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tblsliders".
 *
 * @property integer $id
 * @property string $image_file
 * @property string $heading

 * @property integer $status
 */
class Tblsliders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblsliders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['image_file', 'heading', 'status'], 'required'],
            [['status'], 'integer'],
            [['image_file'], 'string', 'max' => 256],
            [['heading'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image_file' => 'Image File',
            'heading' => 'Heading',
           
            'status' => 'Status',
        ];
    }
}
