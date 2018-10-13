<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\TblstudentRegistration */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-md-offset-9">
    <a class="btn btn-primary btn-md" href="<?php echo Url::toRoute('tblstudent-registration/index');?>">View Student Registration Details</a>
</div>
<div class="tblstudent-registration-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
    <div class="col-md-4">
        <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'parent_email_id')->textInput(['maxlength' => true]) ?>

        <!-- <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?> --> 

        <?= $form->field($model, 'pr_address')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'tmp_address')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-4">
        <!-- <?= $form->field($model, 'dob')->textInput() ?> -->
        <?= $form->field($model, 'dob')->widget(\yii\jui\DatePicker::classname(),
                        [ 'dateFormat' => 'yyyy-MM-dd',

                                'clientOptions' => [
                                    
                                    'changeYear'=>true,
                                    'changeMonth'=>true,
                                    'yearRange'=>'-70y:c+nn',
                                    'maxDate'=>'-1d'
                                ],
                                'options' => ['class' => 'form-control']
                            ]) ?> 

        <?= $form->field($model, 'parent_contact_no')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'parent_alt_contact_no')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'pincode')->textInput() ?>

        <?= $form->field($model, 'aadar_card_number')->textInput() ?>
    </div>
    <div class="col-md-4">
    <?= $form->field($model, 'ui_number')->textInput() ?>

    <?= $form->field($model, 'mothers_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->dropDownList([ 'm' => 'Male', 'f' => 'Female', ], ['prompt' => 'select gender']) ?>

    
    <?= $form->field($model, 'class_id')->dropDownList($classlist,['prompt'=>'Choose...']) ?>

    <!-- <?= $form->field($model, 'insert_date')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <?= $form->field($model, 'isDeleted')->textInput() ?> -->

    <?= $form->field($model, 's_id')->dropDownList($schoollist,['prompt'=>'Choose...']) ?>
    

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            <a class="btn btn-danger" href="<?php echo Url::toRoute('site/index');?>">Cancel</a>
        </div>
    </div>
</div>
    <?php ActiveForm::end(); ?>

</div>
