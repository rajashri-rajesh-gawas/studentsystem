<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblemployeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employees';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblemployee-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Employee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'emp_id',
            'first_name',
            'middle_name',
            'last_name',
            // 'email_id:email',
            // 'password',
            // 'contact_no',
            // 'alt_contact_no',
             // array(
             //        'attribute' =>'gender',
             //        //filter is dropdown - static data
             //        'filter'=> array('m'=>'Male','f'=>'Female'), 
             //    ),
            // 'gender',
            'address',
            // 'aadar_card_number',
            // 'job_code',
            // 'joining_date',
            [
                'attribute' =>'joining_date',
                'value' =>'joining_date',
                'format' =>'raw',
                'filter' =>DatePicker::widget([
                    'model' =>$searchModel,
                    'attribute' =>'joining_date',
                    'clientOptions' =>[
                        'autoclose' =>true,
                        'dateFormat' => 'yyyy-MM-dd',
                    ]
                ]),
            ],
            [
                'attribute' =>'dob',
                'value' =>'dob',
                'format' =>'raw',
                'filter' =>DatePicker::widget([
                    'model' =>$searchModel,
                    'attribute' =>'dob',
                    'clientOptions' =>[
                        'autoclose' =>true,
                        'dateFormat' => 'yyyy-MM-dd',
                    ]
                ]),
            ],
            // 'ui_number',
            // 'insert_date',
            // 'update_date',
            // 'isDeleted',
            array('attribute'=>'s_id','value'=>function($data)

                { 
                   return (isset($data->school))?$data->school->s_name:"";
                        }),
            array('attribute'=>'dept_id','value'=>function($data)

                { 
                   return (isset($data->department))?$data->department->dept_name:""; 
                        }),

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
