<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\jui\DatePicker;


/* @var $this yii\web\View */
/* @var $model backend\models\TblschoolInfo */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="col-md-offset-10">
    <a class="btn btn-primary btn-md" href="<?php echo Url::toRoute('tblschool-info/index');?>">View School Details</a>
</div>
<div class="tblschool-info-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
<div class="col-md-4">
        <?= $form->field($model, 's_name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 's_code')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 's_address')->textInput(['maxlength' => true]) ?>

        <!-- <?= $form->field($model, 's_establishment_date')->textInput() ?>  -->
        <?= $form->field($model, 's_establishment_date')->widget(\yii\jui\DatePicker::classname(), [ 'dateFormat' => 'yyyy-MM-dd',

                                    'clientOptions' => [
                                        
                                        'changeYear'=>true,
                                        'changeMonth'=>true,
                                        'yearRange'=>'-70y:c+nn',
                                        'maxDate'=>'-1d'
                                    ],
                                    'options' => ['class' => 'form-control']
                                ]) ?>

        <?= $form->field($model, 's_phone_number')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-4">
        <?= $form->field($model, 's_owner_name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 's_owner_contact_no')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 's_email')->textInput(['maxlength' => true]) ?>

        <!-- <?= $form->field($model, 'password')->textInput(['maxlength' => true]) ?> -->

        <?= $form->field($model, 's_summery')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 's_logo')->fileInput() ?>
    </div>
    <div class="col-md-4">
        <?= $form->field($model, 's_map1_lat')->textInput() ?>

        <?= $form->field($model, 's_map1_longitude')->textInput() ?>

        <?= $form->field($model, 's_map2_lat')->textInput() ?>

        <?= $form->field($model, 's_map2_logitude')->textInput() ?>

        <!-- <?= $form->field($model, 'insert_date')->textInput() ?>

        <?= $form->field($model, 'update_date')->textInput() ?>

        <?= $form->field($model, 'isDeleted')->textInput() ?> -->

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            <a class="btn btn-danger" href="<?php echo Url::toRoute('site/index');?>">Cancel</a>
        </div>
    </div>
</div>
    <?php ActiveForm::end(); ?>

</div>
