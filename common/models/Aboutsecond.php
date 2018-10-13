<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "aboutsecond".
 *
 * @property integer $id
 * @property string $heading
 * @property string $description
 */
class Aboutsecond extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aboutsecond';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['heading', 'description'], 'required'],
            [['heading'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'heading' => 'Heading',
            'description' => 'Description',
        ];
    }
}
