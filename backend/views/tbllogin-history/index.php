<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblloginHistorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Login Histories';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbllogin-history-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Login History', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'login_history_id',
            'login_access_id',
            'login_date',
            'login_time',
            'logout_date',
            // 'logout_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
