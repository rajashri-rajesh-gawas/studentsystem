<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\TblstudentRegistration */

// $this->title = $model->student_id;
// $this->params['breadcrumbs'][] = ['label' => 'Tblstudent Registrations', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblstudent-registration-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->student_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->student_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <a class="btn btn-primary btn-md" href="<?php echo Url::toRoute('tblstudent-registration/index');?>">Back</a>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'student_id',
            'first_name',
            'middle_name',
            'last_name',
            'parent_email_id:email',
            // 'password',
            'pr_address',
            'tmp_address',
            'dob',
            'parent_contact_no',
            'parent_alt_contact_no',
            'city',
            'pincode',
            'aadar_card_number',
            'ui_number',
            'mothers_name',
            'gender',
            array('attribute'=>'class_id','value'=>$model->class->class_name),
            // 'insert_date',
            // 'update_date',
            // 'isDeleted',
            array('attribute'=>'s_id','value'=>$model->school->s_name),
        ],
    ]) ?>

</div>
