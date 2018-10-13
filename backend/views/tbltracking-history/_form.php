<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\TbltrackingHistory */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="col-md-offset-6">
    <a class="btn btn-primary btn-md" href="<?php echo Url::toRoute('tbltracking-history/index');?>">View Tracking Details</a>
</div>
<div class="tbltracking-history-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'speed')->textInput() ?>

    <?= $form->field($model, 'ui_id')->textInput() ?>

    <?= $form->field($model, 'insert_date')->textInput() ?>

    <?= $form->field($model, 'insert_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <a class="btn btn-danger" href="<?php echo Url::toRoute('site/index');?>">Cancel</a>
    </div>

    <?php ActiveForm::end(); ?>

</div>
