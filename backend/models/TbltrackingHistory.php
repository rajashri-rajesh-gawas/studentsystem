<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbltracking_history".
 *
 * @property integer $tracking_id
 * @property string $lat
 * @property string $longitude
 * @property integer $speed
 * @property integer $ui_id
 * @property string $insert_date
 * @property string $insert_time
 */
class TbltrackingHistory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbltracking_history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lat', 'longitude', 'speed', 'ui_id', 'insert_date', 'insert_time'], 'required'],
            [['speed', 'ui_id'], 'integer'],
            [['insert_date', 'insert_time'], 'safe'],
            [['lat', 'longitude'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tracking_id' => 'Tracking ID',
            'lat' => 'Latitude',
            'longitude' => 'Longitude',
            'speed' => 'Speed',
            'ui_id' => 'Ui ID',
            'insert_date' => 'Insert Date',
            'insert_time' => 'Insert Time',
        ];
    }
}
