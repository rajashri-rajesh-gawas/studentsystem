<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblstudentRegistrationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Registrations';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblstudent-registration-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Student Registration', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'student_id',
            'first_name',
            'middle_name',
            'last_name',
            'parent_email_id:email',
            // 'password',
            // 'pr_address',
            // 'tmp_address',
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
            // 'parent_contact_no',
            // 'parent_alt_contact_no',
            // 'city',
            // 'pincode',
            // 'aadar_card_number',
            // 'ui_number',
            // 'mothers_name',
            // 'gender',
            // 'class_id',
            array('attribute'=>'class_id','value'=>function($data)
            {
                return (isset($data->class))?$data->class->class_name:"";
            }),
            // 'insert_date',
            // 'update_date',
            // 'isDeleted',
            array('attribute'=>'s_id','value'=>function($data)

                { 
                   return (isset($data->school))?$data->school->s_name:""; 
                        }),

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
