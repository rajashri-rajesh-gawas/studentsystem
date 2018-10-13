<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\TblschoolInfo */

// $this->title = $model->s_id;
// $this->params['breadcrumbs'][] = ['label' => 'Tblschool Infos', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblschool-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->s_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->s_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <a class="btn btn-primary btn-md" href="<?php echo Url::toRoute('tblschool-info/index');?>">Back</a>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 's_id',
            's_name',
            's_code',
            's_address',
            's_establishment_date',
            's_phone_number',
            's_owner_name',
            's_owner_contact_no',
            's_email:email',
            's_summery',
            [
                'attribute'=>'s_logo',
                'value'=>'../image/schoolinfo/'.$model->s_logo,
                'format' => ['image',['width'=>'200px','height'=>'100']],
            ],
            's_map1_lat',
            's_map1_longitude',
            's_map2_lat',
            's_map2_logitude',
            // 'insert_date',
            // 'update_date',
            // 'isDeleted',
        ],
    ]) ?>

</div>
