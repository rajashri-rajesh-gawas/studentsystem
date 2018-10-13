<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\TblsmsSetting */

// $this->title = $model->sms_id;
// $this->params['breadcrumbs'][] = ['label' => 'Tblsms Settings', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblsms-setting-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->sms_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->sms_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <a class="btn btn-primary btn-md" href="<?php echo Url::toRoute('tblsms-setting/index');?>">Back</a>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'sms_id',
            'sender_id',
            'sms_url:url',
            'user_name',
            // 'password',
            'route',
            array('attribute'=>'s_id','value'=>$model->school->s_name),
            // 'insert_date',
            // 'update_date',
            // 'isDeleted',
        ],
    ]) ?>

</div>
