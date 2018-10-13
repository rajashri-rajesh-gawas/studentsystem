<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "homefeatures".
 *
 * @property integer $id
 * @property string $image_file
 * @property string $heading
 * @property string $description
 */
class Homefeatures extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'homefeatures';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image_file', 'heading', 'description'], 'required'],
            [['image_file'], 'string', 'max' => 255],
            [['heading'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 150],
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
            'description' => 'Description',
        ];
    }
}
