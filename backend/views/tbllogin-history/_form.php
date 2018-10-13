<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\TblloginHistory */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="col-md-offset-6">
    <a class="btn btn-primary btn-md" href="<?php echo Url::toRoute('tbllogin-history/index');?>">View Login History Details</a>
</div>
<div class="tbllogin-history-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'login_access_id')->textInput() ?>

    <?= $form->field($model, 'login_date')->textInput() ?>

    <?= $form->field($model, 'login_time')->textInput() ?>

    <?= $form->field($model, 'logout_date')->textInput() ?>

    <?= $form->field($model, 'logout_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <a class="btn btn-danger" href="<?php echo Url::toRoute('site/index');?>">Cancel</a>
    </div>

    <?php ActiveForm::end(); ?>

</div>
