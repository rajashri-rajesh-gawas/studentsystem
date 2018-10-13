<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tblemployee */

$this->title = 'Update Employee: ' . $model->emp_id;
// $this->params['breadcrumbs'][] = ['label' => 'Tblemployees', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->emp_id, 'url' => ['view', 'id' => $model->emp_id]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="tblemployee-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'schoollist'=>$schoollist,
        'departmentlist'=>$departmentlist
    ]) ?>

</div>
