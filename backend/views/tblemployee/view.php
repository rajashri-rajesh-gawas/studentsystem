<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\Tblemployee */

// $this->title = $model->emp_id;
// $this->params['breadcrumbs'][] = ['label' => 'Tblemployees', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblemployee-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->emp_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->emp_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <a class="btn btn-primary btn-md" href="<?php echo Url::toRoute('tblemployee/index');?>">Back</a>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'emp_id',
            'first_name',
            'middle_name',
            'last_name',
            'email_id:email',
            // 'password',
            'contact_no',
            'alt_contact_no',
            // array(
            //     'name' => 'gender',
            //     'value' => $model->gender == 'm' ? 'Male' 'f' ? 'Female'
            // ),
            // array('attribute'=>'gender','value'=>$model->m->Male->f->Female),
            'gender',
            'address',
            'aadar_card_number',
            'job_code',
            'joining_date',
            'dob',
            'ui_number',
            // 'insert_date',
            // 'update_date',
            // 'isDeleted',
        
            array('attribute'=>'s_id','value'=>(isset($model->school))?$model->school->s_name:""),
            array('attribute'=>'dept_id','value'=>$model->department->dept_name)
        ],
    ]) ?>

</div>
