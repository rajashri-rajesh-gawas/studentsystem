<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblstudAttendanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Attendances';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblstud-attendance-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Student Attendance', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'attend_id',
            
            array('attribute'=>'student_id','value'=>function($data)

                { 
                   return (isset($data->student))?$data->student->first_name:""; 
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
            // 's_id',
            array('attribute'=>'s_id','value'=>function($data)

                { 
                   return (isset($data->school))?$data->school->s_name:"";
                        }),

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
