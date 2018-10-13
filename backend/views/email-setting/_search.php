<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EmailSettingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="email-setting-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'email_setting_id') ?>

    <?= $form->field($model, 'host_name') ?>

    <?= $form->field($model, 'host_user') ?>

    <?= $form->field($model, 'host_password') ?>

    <?= $form->field($model, 'host_port') ?>

    <?php // echo $form->field($model, 'ssl') ?>

    <?php // echo $form->field($model, 's_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
