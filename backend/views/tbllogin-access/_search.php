<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblloginAccessSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbllogin-access-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'login_access_id') ?>

    <?= $form->field($model, 'emp_id') ?>

    <?= $form->field($model, 'student_id') ?>

    <?= $form->field($model, 'email_id') ?>

    <?= $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'user_type') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
