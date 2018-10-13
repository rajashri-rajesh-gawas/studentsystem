<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Tblsliders */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tblsliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblsliders-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
            'attribute'=>'image_file',
            'format'=>'html',
            'value'=>function($data){
                return Html::img('../image/'.$data['image_file'],['width'=>'300px','class'=>'img-respnsive thumbnail']);
            },
            ],
            'heading',
            
            'status',
        ],
    ]) ?>

</div>
