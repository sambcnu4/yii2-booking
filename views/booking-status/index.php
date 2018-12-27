<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use app\models\BookingStatus;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BookingStatusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'สถานะการจอง';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-status-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มสถานะการจอง', ['create'], ['class' => 'btn btn-danger']) ?>
    </p>
    <div class="box box-primary box-solid">
        <div class="box-header">
            <div class="box-title"><?= $this->title ?></div>
        </div>
        <div class="box-body"> 
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    //'booking_status_id',
                    'booking_status_name',
                    //'booking_statust_color',
                    [
                        'attribute' => 'booking_statust_color',
                        'format' => 'html',
                        'value' => function ($model) {
                            return '<span class="badge" style="background-color:' . $model->booking_statust_color . ';"><b>' . $model->booking_statust_color . '</b></span>';
                            //return '<p class="lable" style="color:' . $model->status->color  . ';">' . $model->status->status_name . '</p>';
                        },
                        'filter' => Html::activeDropDownList($searchModel, 'booking_statust_color', ArrayHelper::map(BookingStatus::find()->all(), 'booking_status_id', 'booking_statust_color'), ['class' => 'form-control', 'prompt' => 'ทั้งหมด...'])
                    ],
                    //['class' => 'yii\grid\ActionColumn'],
                    [
                        'class' => 'kartik\grid\ActionColumn',
                        'options' => ['style' => 'width:120px;'],
                        'buttonOptions' => ['class' => 'btn btn-default'],
                        'template' => '<div class="btn-group btn-group-xs text-center" role="group"> {view} {update} {delete}</div>'
                    ],
                ],
            ]);
            ?>
        </div>
    </div>
</div>