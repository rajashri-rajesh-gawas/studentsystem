<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbltrackingHistory */

$this->title = 'Update Tracking History: ' . $model->tracking_id;
// $this->params['breadcrumbs'][] = ['label' => 'Tbltracking Histories', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->tracking_id, 'url' => ['view', 'id' => $model->tracking_id]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbltracking-history-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
