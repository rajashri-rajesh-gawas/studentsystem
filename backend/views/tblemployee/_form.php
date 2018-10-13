<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Tblemployee */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="col-md-offset-10">
    <a class="btn btn-primary btn-md" href="<?php echo Url::toRoute('tblemployee/index');?>">View Employee Details</a>
</div>
<div class="tblemployee-form">

    <?php $form = ActiveForm::begin(); ?>

<div class="row">
    <div class="col-md-4">
    <?= $form->field($model, 'first_name')->textInput(['class'=>'form-control','maxlength' => true]) ?>

    <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_id')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'password')->passwordInput() ?> -->

    <?= $form->field($model, 'contact_no')->textInput() ?>

    


</div>

    <div class="col-md-4">
    <?= $form->field($model, 'alt_contact_no')->textInput() ?>
 <!-- <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?> -->
    <?= $form->field($model, 'gender')->dropDownList([ 'm' => 'Male', 'f' => 'Female', ], ['prompt' => 'select gender']) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aadar_card_number')->textInput() ?>

    <?= $form->field($model, 'job_code')->textInput() ?>


    </div>
<div class="col-md-4">
   

    
    <!-- <?= $form->field($model, 'joining_date')->textInput() ?> -->
    <?= $form->field($model, 'joining_date')->widget(\yii\jui\DatePicker::classname(), [ 'dateFormat' => 'yyyy-MM-dd',

                                'clientOptions' => [
                                    
                                    'changeYear'=>true,
                                    'changeMonth'=>true,
                                    'yearRange'=>'-70y:c+nn',
                                    'maxDate'=>'-1d'
                                ],
                                'options' => ['class' => 'form-control']
                            ]) ?> 
    <!-- <?= $form->field($model, 'dob')->textInput() ?> -->
    <?= $form->field($model, 'dob')->widget(\yii\jui\DatePicker::classname(), [ 'dateFormat' => 'yyyy-MM-dd',

                                'clientOptions' => [
                                    
                                    'changeYear'=>true,
                                    'changeMonth'=>true,
                                    'yearRange'=>'-70y:c+nn',
                                    'maxDate'=>'-1d'
                                ],
                                'options' => ['class' => 'form-control']
                            ]) ?> 

    <?= $form->field($model, 'ui_number')->textInput() ?>

    <!-- <?= $form->field($model, 'insert_date')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <?= $form->field($model, 'isDeleted')->textInput() ?> -->

    <?= $form->field($model, 's_id')->dropDownList($schoollist,['prompt'=>'Choose...']) ?>

    <?= $form->field($model, 'dept_id')->dropDownList($departmentlist,['prompt'=>'Choose...']) ?>

    <div class="form-group pull-right">
        <?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <a class="btn btn-danger" href="<?php echo Url::toRoute('site/index');?>">Cancel</a>
    </div>
</div>
</div>
    <?php ActiveForm::end(); ?>

</div>
