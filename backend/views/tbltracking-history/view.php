<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\TbltrackingHistory */

// $this->title = $model->tracking_id;
// $this->params['breadcrumbs'][] = ['label' => 'Tbltracking Histories', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbltracking-history-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->tracking_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->tracking_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <a class="btn btn-primary btn-md" href="<?php echo Url::toRoute('tbltracking-history/index');?>">Back</a>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'tracking_id',
            'lat',
            'longitude',
            'speed',
            'ui_id',
            'insert_date',
            'insert_time',
        ],
    ]) ?>

</div>
