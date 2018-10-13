<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\TblemployeeAttendance */

// $this->title = $model->emp_attend_id;
// $this->params['breadcrumbs'][] = ['label' => 'Tblemployee Attendances', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblemployee-attendance-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->emp_attend_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->emp_attend_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <a class="btn btn-primary btn-md" href="<?php echo Url::toRoute('tblemployee-attendance/index');?>">Back</a>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'emp_attend_id',
            array('attribute'=>'emp_id','value'=>$model->employee->first_name),
            // 'lat_map1',
            // 'long_map1',
            'login_time',
            'login_date',
            // 'logout_time',
            // 'logout_date',
            // 'lat_map2',
            // 'long_map2',
            // 'insert_date',
            // 'update_date',
            // 'isDeleted',
            array('attribute'=>'s_id','value'=>$model->school->s_name),
        ],
    ]) ?>

</div>
