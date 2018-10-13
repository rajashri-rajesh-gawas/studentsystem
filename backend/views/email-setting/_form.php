<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\EmailSetting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-md-offset-6">
    <a class="btn btn-primary btn-md" href="<?php echo Url::toRoute('email-setting/index');?>">View Email Details</a>
</div>
<div class="email-setting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'host_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'host_user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'host_password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'host_port')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ssl')->textInput() ?>

    <?= $form->field($model, 's_id')->dropDownList($schoollist,['prompt'=>'Choose...']) ?> 

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
         <a class="btn btn-danger" href="<?php echo Url::toRoute('site/index');?>">Cancel</a>
    </div>

    <?php ActiveForm::end(); ?>

</div>
