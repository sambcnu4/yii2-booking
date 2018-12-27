<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BookingStatus */

$this->title = $model->booking_status_name;
$this->params['breadcrumbs'][] = ['label' => 'สถานะการจอง', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-status-view">
    <p>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->booking_status_id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('ลบ', ['delete', 'id' => $model->booking_status_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>
    <div class="box box-primary box-solid">
        <div class="box-header">
            <div class="box-title"><?= $this->title ?></div>
        </div>
        <div class="box-body"> 
            <?=
            DetailView::widget([
                'model' => $model,
                'attributes' => [
                    // 'booking_status_id',
                    'booking_status_name',
                    //'booking_statust_color',
                    [
                        'attribute' => 'booking_statust_color',
                        'format' => 'html',
                        'value' => function ($model) {
                            return '<span class="badge" style="background-color:' . $model->booking_statust_color . ';"><b>' . $model->booking_statust_color . '</b></span>';
                            //return '<p class="lable" style="color:' . $model->status->color  . ';">' . $model->status->status_name . '</p>';
                        },
                    ],
                ],
            ])
            ?>

        </div>
    </div>
</div>
