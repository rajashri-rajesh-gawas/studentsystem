<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tbldepartment */

$this->title = 'Add Department';
// $this->params['breadcrumbs'][] = ['label' => 'Tbldepartments', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbldepartment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'schoollist'=>$schoollist
    ]) ?>

</div>
