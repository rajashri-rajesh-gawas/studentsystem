<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AboutfirstSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aboutfirsts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aboutfirst-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Aboutfirst', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'description',
            [
            'attribute'=>'image_file',
            'format'=>'html',
            'value'=>function($data){
                return Html::img('../image/'.$data['image_file'],['width'=>'300px','class'=>'img-respnsive thumbnail']);
            },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
