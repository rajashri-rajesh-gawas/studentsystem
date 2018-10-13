<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Aboutfirst */

$this->title = 'Create Aboutfirst';
$this->params['breadcrumbs'][] = ['label' => 'Aboutfirsts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aboutfirst-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
