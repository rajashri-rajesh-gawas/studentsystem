<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblstudentRegistrationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tblstudent-registration-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'student_id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'middle_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'parent_email_id') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'pr_address') ?>

    <?php // echo $form->field($model, 'tmp_address') ?>

    <?php // echo $form->field($model, 'dob') ?>

    <?php // echo $form->field($model, 'parent_contact_no') ?>

    <?php // echo $form->field($model, 'parent_alt_contact_no') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'pincode') ?>

    <?php // echo $form->field($model, 'aadar_card_number') ?>

    <?php // echo $form->field($model, 'ui_number') ?>

    <?php // echo $form->field($model, 'mothers_name') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'class_id') ?>

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
