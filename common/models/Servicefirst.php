<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "servicefirst".
 *
 * @property integer $id
 * @property string $description
 * @property string $image_file
 */
class Servicefirst extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'servicefirst';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'image_file'], 'required'],
            [['description'], 'string', 'max' => 1024],
            [['image_file'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
            'image_file' => 'Image File',
        ];
    }
}
