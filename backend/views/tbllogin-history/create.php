<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblloginHistory */

$this->title = 'Add Login History';
// $this->params['breadcrumbs'][] = ['label' => 'Tbllogin Histories', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbllogin-history-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
