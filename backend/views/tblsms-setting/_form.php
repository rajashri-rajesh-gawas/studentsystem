<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\TblsmsSetting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-md-offset-6">
    <a class="btn btn-primary btn-md" href="<?php echo Url::toRoute('tblsms-setting/index');?>">View SMS Details</a>
</div>
<div class="tblsms-setting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sender_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sms_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'route')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_id')->dropDownList($schoollist,['prompt'=>'Choose...']) ?>

    <!-- <?= $form->field($model, 'insert_date')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <?= $form->field($model, 'isDeleted')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <a class="btn btn-danger" href="<?php echo Url::toRoute('site/index');?>">Cancel</a>
    </div>

    <?php ActiveForm::end(); ?>

</div>
