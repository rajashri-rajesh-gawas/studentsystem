<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblloginHistorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbllogin-history-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'login_history_id') ?>

    <?= $form->field($model, 'login_access_id') ?>

    <?= $form->field($model, 'login_date') ?>

    <?= $form->field($model, 'login_time') ?>

    <?= $form->field($model, 'logout_date') ?>

    <?php // echo $form->field($model, 'logout_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
