<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\EmailSetting */

$this->title = 'Update Email Setting: ' . $model->email_setting_id;
// $this->params['breadcrumbs'][] = ['label' => 'Email Settings', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->email_setting_id, 'url' => ['view', 'id' => $model->email_setting_id]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="email-setting-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'schoollist'=>$schoollist
    ]) ?>

</div>
