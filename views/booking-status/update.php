<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BookingStatus */

$this->title = 'แก้ไขสถานะการจอง: ' . $model->booking_status_name;
$this->params['breadcrumbs'][] = ['label' => 'สถานะการจอง', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->booking_status_name, 'url' => ['view', 'id' => $model->booking_status_id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="booking-status-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
