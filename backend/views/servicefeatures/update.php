<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Servicefeatures */

$this->title = 'Update Servicefeatures: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Servicefeatures', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="servicefeatures-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
