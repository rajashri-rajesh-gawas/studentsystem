<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Homefirst */

$this->title = 'Update Homefirst: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Homefirsts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="homefirst-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
