<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblschoolInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'School Information';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblschool-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add School Information', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 's_id',
            's_name',
            's_code',
            's_address',
            // [
            //     'attribute' =>'s_establishment_date',
            //     'value' =>'s_establishment_date',
            //     'format' =>'raw',
            //     'filter' =>DatePicker::widget([
            //         'model' =>$searchModel,
            //         'attribute' =>'s_establishment_date',
            //         'clientOptions' =>[
            //             'autoclose' =>true,
            //             'dateFormat' => 'yyyy-MM-dd',
            //         ]
            //     ]),
            // ],
            //'s_establishment_date',
            // 's_phone_number',
            's_owner_name',
            's_owner_contact_no',
            's_email:email',
            // 's_summery',
            [
                'attribute' => 's_logo',
                'format' => 'html',
                'label' => 'School Logo',
                'value' => function ($data) {
                    return Html::img('../image/schoolinfo/' . $data['s_logo'],
                        ['width' => '150px' ,'class' => 'img-responsive thumbnail']);
                },
            ],
            // 's_map1_lat',
            // 's_map1_longitude',
            // 's_map2_lat',
            // 's_map2_logitude',
            // 'insert_date',
            // 'update_date',
            // 'isDeleted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
