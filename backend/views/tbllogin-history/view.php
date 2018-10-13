<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\TblloginHistory */

// $this->title = $model->login_history_id;
// $this->params['breadcrumbs'][] = ['label' => 'Tbllogin Histories', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbllogin-history-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->login_history_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->login_history_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <a class="btn btn-primary btn-md" href="<?php echo Url::toRoute('tbllogin-history/index');?>">Back</a>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'login_history_id',
            'login_access_id',
            'login_date',
            'login_time',
            'logout_date',
            'logout_time',
        ],
    ]) ?>

</div>
