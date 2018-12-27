<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BookingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bookings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Booking', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'booking_id',
            'booking_no',
            'booking_room',
            'booking_start',
            'booking_end',
            //'booking_usefor',
            //'departments_id',
            //'booking_user',
            //'booking_tel',
            //'booking_title',
            //'booking_description:ntext',
            //'booking_seate',
            //'booking_breaks',
            //'booking_format',
            //'booking_budget',
            //'booking_cur_date',
            //'eqipment_notebook',
            //'eqipment_visualizer',
            //'eqipment_projector',
            //'eqipment_tv',
            //'eqipment_mic1',
            //'eqipment_mic2',
            //'eqipment_sound_record',
            //'eqipment_vdo_record',
            //'eqipment_photo_record',
            //'file',
            //'booking_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
