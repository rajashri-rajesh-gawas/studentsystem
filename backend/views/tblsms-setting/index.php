<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblsmsSettingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sms Settings';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblsms-setting-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Sms Setting', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'sms_id',
            'sender_id',
            'sms_url:url',
            'user_name',
            // 'password',
            'route',
            array('attribute'=>'s_id','value'=>function($data)

                { 
                   return $data->school->s_name; 
                        }),
            // 'insert_date',
            // 'update_date',
            // 'isDeleted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
