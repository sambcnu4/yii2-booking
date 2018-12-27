<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Booking */

$this->title = 'เพิ่มการจอง';
$this->params['breadcrumbs'][] = ['label' => 'ตารางการจอง', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-create">
    <p><?= Html::a('<i class="fa fa-reply"></i> ย้อนกลับ', ['/booking'], ['class' => 'btn btn-info']) ?> </p>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
