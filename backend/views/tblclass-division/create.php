<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblclassDivision */

$this->title = 'Add Class Division';
// $this->params['breadcrumbs'][] = ['label' => 'Tblclass Divisions', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblclass-division-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'schoollist'=>$schoollist
    ]) ?>

</div>
