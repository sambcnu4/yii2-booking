<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView; //composer require kartik-v/yii2-grid "dev-master"
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use app\models\Room;
use app\models\Usefor;
use app\models\BookingStatus;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BookingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ระบบจองห้องประชุม';
$this->params['breadcrumbs'][] = $this->title;
?>
<p>
    <?php echo Html::a('เพิ่มการจอง', ['create'], ['class' => 'btn btn-danger']) ?>
    <?php //echo Html::button('เพิ่มการจอง', ['value' => Url::to('create'), 'class' => 'btn btn-danger', 'id' => 'modalButton']) ?>

</p>

<div class="booking-index">
    <div class="box box-primary box-solid">
        <div class="box-header">
            <div class="box-title"><?= $this->title ?></div>
        </div>
        <div class="box-body">
            <?php //Pjax::begin();  ?>

            <?php // echo $this->render('_search', ['model' => $searchModel]);   ?>



            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    //'booking_id',
                    //'booking_room',
                    [
                        'attribute' => 'booking_room',
                        'format' => 'html',
                        'value' => function ($model) {
                            return $model->bookingRoom->room_name;
                        },
                        'filter' => Html::activeDropDownList($searchModel, 'booking_room', ArrayHelper::map(Room::find()->all(), 'room_id', 'room_name'), ['class' => 'form-control', 'prompt' => 'ทั้งหมด...'])
                    ],
                    'booking_start',
                    'booking_end',
                    //'booking_usefor',
                    [
                        'attribute' => 'booking_usefor',
                        'format' => 'html',
                        'value' => function ($model) {
                            return $model->bookingUsefor->usefor_name;
                        },
                        'filter' => Html::activeDropDownList($searchModel, 'booking_usefor', ArrayHelper::map(Usefor::find()->all(), 'usefor_id', 'usefor_name'), ['class' => 'form-control', 'prompt' => 'ทั้งหมด...'])
                    ],
                    //'departments_id',
                    'booking_user',
                    //'booking_tel',
                    'booking_title',
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
                    // 'booking_status',
                    [
                        'attribute' => 'booking_status',
                        'format' => 'html',
                        'value' => function ($model) {
                            return '<span class="badge" style="background-color:' . $model->bookingStatus->booking_statust_color . ';"><b>' . $model->bookingStatus->booking_status_name . '</b></span>';
                        },
                        'filter' => Html::activeDropDownList($searchModel, 'booking_status', ArrayHelper::map(BookingStatus::find()->all(), 'booking_status_id', 'booking_status_name'), ['class' => 'form-control', 'prompt' => 'ทั้งหมด...'])
                    ],
                    [
                        'class' => 'kartik\grid\ActionColumn',
                        'options' => ['style' => 'width:120px;'],
                        'buttonOptions' => ['class' => 'btn btn-default'],
                        'template' => '<div class="btn-group btn-group-xs text-center" role="group"> {view} </div>'
                    ],
                ],
            ]);
            ?>
            <?php //Pjax::end(); ?>
        </div>

    </div> 
    <?php
    Modal::begin([
        'header' => '<h4>ระบบจองห้องประชุม</h4>',
        'id' => 'modal',
        'size' => 'modal-lg',
    ]);
    echo "<div id='modalContent'></div>";
    ?>
</div>
