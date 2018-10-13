<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\TblstudAttendance */

// $this->title = $model->attend_id;
// $this->params['breadcrumbs'][] = ['label' => 'Tblstud Attendances', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblstud-attendance-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->attend_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->attend_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <a class="btn btn-primary btn-md" href="<?php echo Url::toRoute('tblstud-attendance/index');?>">Back</a>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'attend_id',
             array('attribute'=>'student_id','value'=>$model->student->first_name),
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
            // 's_id',
            array('attribute'=>'s_id','value'=>$model->school->s_name)
        ],
    ]) ?>

</div>
