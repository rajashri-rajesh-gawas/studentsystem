<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tblemployee */

$this->title = 'Employee Registration';
// $this->params['breadcrumbs'][] = ['label' => 'Tblemployees', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblemployee-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'schoollist'=>$schoollist,
        'departmentlist'=>$departmentlist
    ]) ?>

</div>
