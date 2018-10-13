<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblclassDivisionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Class Division';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblclass-division-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Class Division', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'class_id',
            'class_name',
            'class_division',
            'class_no',
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
