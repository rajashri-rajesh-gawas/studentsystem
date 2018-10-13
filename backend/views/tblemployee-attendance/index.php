<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblemployeeAttendanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employee Attendances';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblemployee-attendance-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Employee Attendance', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'emp_attend_id',
            array('attribute'=>'emp_id','value'=>function($data)

                { 
                   return $data->employee->first_name; 
                        }),
            // 'lat_map1',
            // 'long_map1',
            'login_time',
            [
                'attribute' =>'login_date',
                'value' =>'login_date',
                'format' =>'raw',
                'filter' =>DatePicker::widget([
                    'model' =>$searchModel,
                    'attribute' =>'login_date',
                    'clientOptions' =>[
                        'autoclose' =>true,
                        'dateFormat' => 'yyyy-MM-dd',
                    ]
                ]),
            ],
            // 'logout_time',
            // 'logout_date',
            // 'lat_map2',
            // 'long_map2',
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
