<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblsmsSetting */

$this->title = 'Update Sms Setting: ' . $model->sms_id;
// $this->params['breadcrumbs'][] = ['label' => 'Tblsms Settings', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->sms_id, 'url' => ['view', 'id' => $model->sms_id]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="tblsms-setting-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'schoollist'=>$schoollist
    ]) ?>

</div>
