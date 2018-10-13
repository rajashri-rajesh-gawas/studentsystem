<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TbltrackingHistory */

$this->title = 'Add Tracking History';
// $this->params['breadcrumbs'][] = ['label' => 'Tbltracking Histories', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbltracking-history-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
