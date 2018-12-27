<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

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
        <?= Html::a('Delete', ['delete', 'id' => $model->booking_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'booking_id',
            'booking_no',
            'booking_room',
            'booking_start',
            'booking_end',
            'booking_usefor',
            'departments_id',
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
            'file',
            'booking_status',
        ],
    ]) ?>

</div>
