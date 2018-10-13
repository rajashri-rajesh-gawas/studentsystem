<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblschoolInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tblschool-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 's_id') ?>

    <?= $form->field($model, 's_name') ?>

    <?= $form->field($model, 's_code') ?>

    <?= $form->field($model, 's_address') ?>

    <?= $form->field($model, 's_establishment_date') ?>

    <?php // echo $form->field($model, 's_phone_number') ?>

    <?php // echo $form->field($model, 's_owner_name') ?>

    <?php // echo $form->field($model, 's_owner_contact_no') ?>

    <?php // echo $form->field($model, 's_email') ?>

    <?php // echo $form->field($model, 's_summery') ?>

    <?php // echo $form->field($model, 's_logo') ?>

    <?php // echo $form->field($model, 's_map1_lat') ?>

    <?php // echo $form->field($model, 's_map1_longitude') ?>

    <?php // echo $form->field($model, 's_map2_lat') ?>

    <?php // echo $form->field($model, 's_map2_logitude') ?>

    <?php // echo $form->field($model, 'insert_date') ?>

    <?php // echo $form->field($model, 'update_date') ?>

    <?php // echo $form->field($model, 'isDeleted') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
