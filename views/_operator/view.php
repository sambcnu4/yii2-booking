<?php

use yii\helpers\Html;
use app\models\Room;
use app\models\Usefor;

/* @var $this yii\web\View */
/* @var $model app\models\Booking */

$this->title = $model->bookingUsefor->usefor_name . 'ห้อง' . $model->bookingRoom->room_name . ' เริ่ม:' . $model->booking_start . ' ถึง:' . $model->booking_end;
$this->params['breadcrumbs'][] = ['label' => 'ตารางการจองห้องประชุม', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-update">
    <?=
    $this->render('_view', [
        'model' => $model,
    ])
    ?>

</div>
