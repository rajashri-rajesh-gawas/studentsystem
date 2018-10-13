<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblstudentRegistration */

$this->title = 'Student Registration';
// $this->params['breadcrumbs'][] = ['label' => 'Tblstudent Registrations', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblstudent-registration-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'schoollist'=>$schoollist,
        'classlist' =>$classlist
    ]) ?>

</div>
