<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\EmailSetting */

$this->title = 'Add Email Setting';
// $this->params['breadcrumbs'][] = ['label' => 'Email Settings', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="email-setting-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'schoollist'=>$schoollist
    ]) ?>

</div>
