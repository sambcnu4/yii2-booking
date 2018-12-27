<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Room;
use app\models\BookingStatus;
use slavkovrn\prettyphoto\PrettyPhotoWidget;

/* @var $this yii\web\View */
/* @var $model app\models\Booking */

$this->title = $model->booking_id;
$this->params['breadcrumbs'][] = ['label' => 'Bookings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->booking_id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $model->booking_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <div class="box-body"> 
        <div class="img-thumbnail"> 
            <?php
            echo PrettyPhotoWidget::widget([
                'id' => $model->bookingRoom->room_img, // id of plugin should be unique at page
                'class' => 'galary', // class of plugin to define a style
                //'width' => '100%', // width of image visible in widget (omit - initial width)
                'height' => '300px',
                'images' => [
                    1 => [
                        'src' => $model->bookingRoom->photoViewer,
                        'title' => 'กดขยาย',
                    ],
                ]
            ]);
            ?>
        </div>



        <?=
        DetailView::widget([
            'model' => $model,
            'attributes' => [
                //'booking_status',
                [
                    'attribute' => 'booking_status',
                    'format' => 'html',
                    'value' => function ($model) {
                        return '<span class="badge" style="background-color:' . $model->bookingStatus->booking_statust_color . ';">' . $model->bookingStatus->booking_status_name . '</span>';
                    },
                ],
                //'booking_id',
                //'booking_room',
                [
                    'attribute' => 'booking_room',
                    'format' => 'html',
                    'value' => function ($model) {
                        return $model->bookingRoom->room_name . '</span>';
                    },
                ],
                'booking_start',
                'booking_end',
                //'booking_usefor',
                [
                    'attribute' => 'booking_usefor',
                    'format' => 'html',
                    'value' => function ($model) {
                        return $model->bookingUsefor->usefor_name . '</span>';
                    },
                ],
                //'departments_id',
                [
                    'attribute' => 'departments_id',
                    'format' => 'html',
                    'value' => function ($model) {
                        return $model->departments->department_name . '</span>';
                    },
                ],
                'booking_user',
                'booking_tel',
                'booking_title',
                'booking_description:ntext',
                'booking_seate',
                'booking_breaks',
                'booking_format',
                'booking_budget',
                'booking_cur_date',
                'eqipment_notebook',
                'eqipment_visualizer',
                'eqipment_projector',
                'eqipment_tv',
                'eqipment_mic1',
                'eqipment_mic2',
                'eqipment_sound_record',
                'eqipment_vdo_record',
                'eqipment_photo_record',
            ],
        ])
        ?>

    </div>
