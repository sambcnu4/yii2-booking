<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BookingStatus */

$this->title = 'สถานะการจอง';
$this->params['breadcrumbs'][] = ['label' => 'สถานะการจอง', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-status-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
