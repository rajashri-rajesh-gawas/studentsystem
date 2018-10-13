<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TbldepartmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Departments';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbldepartment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Department', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'dept_id',
            'dept_name',
            'dept_code',
            // 'insert_date',
            // 'update_date',
            // 'isDeleted',
            array('attribute'=>'s_id','value'=>function($data)

                { 
                   return $data->school->s_name; 
                        }),

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
