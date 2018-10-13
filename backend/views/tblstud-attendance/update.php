<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblstudAttendance */

$this->title = 'Update Student Attendance: ' . $model->attend_id;
// $this->params['breadcrumbs'][] = ['label' => 'Tblstud Attendances', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->attend_id, 'url' => ['view', 'id' => $model->attend_id]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="tblstud-attendance-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'studentlist' => $studentlist,
        'schoollist'=>$schoollist
    ]) ?>

</div>
