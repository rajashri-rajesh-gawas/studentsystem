<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblstudentRegistration */

$this->title = 'Update Student Registration: ' . $model->student_id;
// $this->params['breadcrumbs'][] = ['label' => 'Tblstudent Registrations', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->student_id, 'url' => ['view', 'id' => $model->student_id]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="tblstudent-registration-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'schoollist'=>$schoollist,
        'classlist' =>$classlist
    ]) ?>

</div>
