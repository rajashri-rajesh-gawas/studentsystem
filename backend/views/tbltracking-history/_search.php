<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TbltrackingHistorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbltracking-history-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tracking_id') ?>

    <?= $form->field($model, 'lat') ?>

    <?= $form->field($model, 'longitude') ?>

    <?= $form->field($model, 'speed') ?>

    <?= $form->field($model, 'ui_id') ?>

    <?php // echo $form->field($model, 'insert_date') ?>

    <?php // echo $form->field($model, 'insert_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
