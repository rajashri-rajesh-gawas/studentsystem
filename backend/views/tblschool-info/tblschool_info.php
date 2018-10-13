<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblschoolInfo */
/* @var $form ActiveForm */
?>

    <?php $form = ActiveForm::begin(); ?>
<div id="wrapper">
<div id="page-wrapper">
    <div class="form-group ">
        <?= $form->field($model, 's_name') ?>
        <?= $form->field($model, 's_code') ?>
        <?= $form->field($model, 's_address') ?>
        <?= $form->field($model, 's_establishment_date') ?>
        <?= $form->field($model, 's_phone_number') ?>
        <?= $form->field($model, 's_owner_name') ?>
        <?= $form->field($model, 's_owner_contact_no') ?>
        <?= $form->field($model, 's_email') ?>
        <?= $form->field($model, 's_summery') ?>
        <?= $form->field($model, 's_logo') ?>
        <?= $form->field($model, 'insert_date') ?>
        <?= $form->field($model, 'update_date') ?>
        <?= $form->field($model, 'isDeleted') ?>
        <?= $form->field($model, 's_map1_lat') ?>
        <?= $form->field($model, 's_map1_longitude') ?>
        <?= $form->field($model, 's_map2_lat') ?>
        <?= $form->field($model, 's_map2_logitude') ?>
    </div>
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-tblschool_info -->
</div>