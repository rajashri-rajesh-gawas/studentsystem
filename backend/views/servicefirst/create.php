<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Servicefirst */

$this->title = 'Create Servicefirst';
$this->params['breadcrumbs'][] = ['label' => 'Servicefirsts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servicefirst-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
