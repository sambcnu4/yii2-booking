<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Booking */

$this->title = 'แก้ไข: ' . $model->bookingUsefor->usefor_name . 'ห้อง' . $model->bookingRoom->room_name . ' เริ่ม:' . $model->booking_start . ' ถึง:' . $model->booking_end;
$this->params['breadcrumbs'][] = ['label' => 'การจอง', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->booking_id, 'url' => ['view', 'id' => $model->booking_id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="booking-update">
    <p><a class='btn btn-info' HREF="javascript:history.back()" ><i class="fa fa-reply"></i> ย้อนกลับ</a> </p>

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
