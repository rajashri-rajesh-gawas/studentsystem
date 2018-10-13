<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblloginHistory */

$this->title = 'Update Login History: ' . $model->login_history_id;
// $this->params['breadcrumbs'][] = ['label' => 'Tbllogin Histories', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->login_history_id, 'url' => ['view', 'id' => $model->login_history_id]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbllogin-history-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
