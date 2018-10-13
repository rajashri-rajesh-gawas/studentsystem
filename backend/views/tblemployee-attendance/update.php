<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblemployeeAttendance */

$this->title = 'Update Employee Attendance: ' . $model->emp_attend_id;
// $this->params['breadcrumbs'][] = ['label' => 'Tblemployee Attendances', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->emp_attend_id, 'url' => ['view', 'id' => $model->emp_attend_id]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="tblemployee-attendance-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'employeelist' => $employeelist,
        'schoollist'=>$schoollist
    ]) ?>

</div>
