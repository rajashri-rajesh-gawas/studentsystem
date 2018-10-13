<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\TblclassDivision */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-md-offset-6">
    <a class="btn btn-primary btn-md" href="<?php echo Url::toRoute('tblclass-division/index');?>">View Class Details</a>
</div>
<div class="tblclass-division-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">

    <?= $form->field($model, 'class_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'class_division')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'class_no')->textInput() ?>

    <!-- <?= $form->field($model, 'insert_date')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <?= $form->field($model, 'isDeleted')->textInput() ?> -->

    <?= $form->field($model, 's_id')->dropDownList($schoollist,['prompt'=>'Choose...']) ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            
            <a class="btn btn-danger" href="<?php echo Url::toRoute('site/index');?>">Cancel</a>
        </div>
    
</div>
 <?php ActiveForm::end(); ?>

</div>
