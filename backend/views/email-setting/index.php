<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmailSettingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Email Settings';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="email-setting-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Email Setting', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'email_setting_id:email',
            'host_name',
            'host_user',
            'host_password',
            'host_port',
            // 'ssl',
            array('attribute'=>'s_id','value'=>function($data)

                { 
                   return $data->school->s_name; 
                        }),

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
