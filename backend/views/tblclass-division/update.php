<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblclassDivision */

$this->title = 'Update Class Division: ' . $model->class_id;
// $this->params['breadcrumbs'][] = ['label' => 'Tblclass Divisions', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->class_id, 'url' => ['view', 'id' => $model->class_id]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="tblclass-division-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'schoollist'=>$schoollist
    ]) ?>

</div>
