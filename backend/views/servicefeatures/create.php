<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Servicefeatures */

$this->title = 'Create Servicefeatures';
$this->params['breadcrumbs'][] = ['label' => 'Servicefeatures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servicefeatures-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
