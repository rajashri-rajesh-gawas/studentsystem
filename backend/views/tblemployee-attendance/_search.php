<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblemployeeAttendanceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tblemployee-attendance-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'emp_attend_id') ?>

    <?= $form->field($model, 'emp_id') ?>

    <?= $form->field($model, 'lat_map1') ?>

    <?= $form->field($model, 'long_map1') ?>

    <?= $form->field($model, 'login_time') ?>

    <?php // echo $form->field($model, 'login_date') ?>

    <?php // echo $form->field($model, 'logout_time') ?>

    <?php // echo $form->field($model, 'logout_date') ?>

    <?php // echo $form->field($model, 'lat_map2') ?>

    <?php // echo $form->field($model, 'long_map2') ?>

    <?php // echo $form->field($model, 'insert_date') ?>

    <?php // echo $form->field($model, 'update_date') ?>

    <?php // echo $form->field($model, 'isDeleted') ?>

    <?php // echo $form->field($model, 's_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
