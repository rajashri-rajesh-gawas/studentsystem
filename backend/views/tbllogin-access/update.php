<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblloginAccess */

$this->title = 'Update Tbllogin Access: ' . $model->login_access_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbllogin Accesses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->login_access_id, 'url' => ['view', 'id' => $model->login_access_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbllogin-access-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
