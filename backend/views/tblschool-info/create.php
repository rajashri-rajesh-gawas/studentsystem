<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblschoolInfo */

$this->title = 'Add School Information';
// $this->params['breadcrumbs'][] = ['label' => 'Tblschool Infos', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblschool-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
