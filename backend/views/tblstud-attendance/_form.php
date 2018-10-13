<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\jui\DatePicker;
use janisto\timepicker\TimePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\TblstudAttendance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-md-offset-6">
    <a class="btn btn-primary btn-md" href="<?php echo Url::toRoute('tblstud-attendance/index');?>">View Student Details</a>
</div>
<div class="tblstud-attendance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_id')->dropDownList($studentlist,['prompt'=>'Choose...']) ?>

    <!-- <?= $form->field($model, 'lat_map1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'long_map1')->textInput(['maxlength' => true]) ?> --> 

    <?= $form->field($model, 'login_time')->widget(\janisto\timepicker\TimePicker::className(), [
                            'mode' => 'time',
                            'clientOptions'=>[
                                //'dateFormat' => 'yy-mm-dd',
                                'timeFormat' => 'HH:mm:ss',
                                'showSecond' => true,
                            ]
                        ]);
                    ?>

    <?= $form->field($model, 'login_date')->widget(\yii\jui\DatePicker::classname(), [
                        'clientOptions' => ['minDate' => '0'],
                        //'minDate' => 0,
                        'dateFormat' => 'yyyy-MM-dd',
                        'options'=>['class'=>'form-control'],
                        
                        ]) ?>

    <!-- <?= $form->field($model, 'logout_time')->textInput() ?>

    <?= $form->field($model, 'logout_date')->textInput() ?>

    <?= $form->field($model, 'lat_map2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'long_map2')->textInput(['maxlength' => true]) ?> -->

    <!-- <?= $form->field($model, 'insert_date')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <?= $form->field($model, 'isDeleted')->textInput() ?> -->

   <?= $form->field($model, 's_id')->dropDownList($schoollist,['prompt'=>'Choose...']) ?>
   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <a class="btn btn-danger" href="<?php echo Url::toRoute('site/index');?>">Cancel</a>
    </div>

    <?php ActiveForm::end(); ?>

</div>
