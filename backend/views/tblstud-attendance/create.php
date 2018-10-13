<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblstudAttendance */

$this->title = 'Add Student Attendance';
// $this->params['breadcrumbs'][] = ['label' => 'Tblstud Attendances', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblstud-attendance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'studentlist' => $studentlist,
        'schoollist'=>$schoollist
    ]) ?>

</div>
