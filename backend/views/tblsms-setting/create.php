<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblsmsSetting */

$this->title = 'Add Sms Setting';
// $this->params['breadcrumbs'][] = ['label' => 'Tblsms Settings', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblsms-setting-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'schoollist'=>$schoollist
    ]) ?>

</div>
