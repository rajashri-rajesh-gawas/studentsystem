<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Homefirst */

$this->title = 'Create Homefirst';
$this->params['breadcrumbs'][] = ['label' => 'Homefirsts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="homefirst-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
