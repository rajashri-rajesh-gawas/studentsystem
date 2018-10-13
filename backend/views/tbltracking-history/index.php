<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TbltrackingHistorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tracking Histories';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbltracking-history-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Tracking History', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'tracking_id',
            'lat',
            'longitude',
            'speed',
            'ui_id',
            // 'insert_date',
            // 'insert_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
