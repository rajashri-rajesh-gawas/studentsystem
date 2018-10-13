<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tblsliders */

$this->title = 'Update Tblsliders: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tblsliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tblsliders-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
