<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "homefirst".
 *
 * @property integer $id
 * @property string $image_file
 * @property string $content
 
 */
class Homefirst extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'homefirst';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image_file', 'content'], 'required'],
            [['image_file'], 'string', 'max' => 255],
            [['content'], 'string','max'=>1023],
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
            'content' => 'Content',
            
        ];
    }
}
