<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblemployeeAttendance */

$this->title = 'Add Employee Attendance';
// $this->params['breadcrumbs'][] = ['label' => 'Tblemployee Attendances', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblemployee-attendance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'employeelist' => $employeelist,
        'schoollist'=>$schoollist
    ]) ?>

</div>
