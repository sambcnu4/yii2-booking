<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Departments */

$this->title = $model->department_name;
$this->params['breadcrumbs'][] = ['label' => 'หน่วยงาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departments-view">

    <p>
        <?=Html::a('แก้ไข', ['update', 'id' => $model->departments_id], ['class' => 'btn btn-primary'])?>
        <?=Html::a('ลบ', ['delete', 'id' => $model->departments_id], [
    'class' => 'btn btn-danger',
    'data' => [
        'confirm' => 'Are you sure you want to delete this item?',
        'method' => 'post',
    ],
])?>
    </p>
    <div class="box box-primary box-solid">
        <div class="box-header">
            <div class="box-title"><?=$this->title?></div>
        </div>
        <div class="box-body">
    <?=DetailView::widget([
    'model' => $model,
    'attributes' => [
        //'departments_id',
        'department_name',
        //'color',
        [
            'attribute' => 'color',
            'format' => 'html',
            'value' => function ($model) {
                return '<span class="badge" style="background-color:' . $model->color . ';"><b>' . $model->color . '</b></span>';
                //return '<p class="lable" style="color:' . $model->status->color  . ';">' . $model->status->status_name . '</p>';
            },
        ],
    ],
])?>

</div>
    </div>
</div>
