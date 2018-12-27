<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BookingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'booking_id') ?>

    <?= $form->field($model, 'booking_room') ?>

    <?= $form->field($model, 'booking_start') ?>

    <?= $form->field($model, 'booking_end') ?>

    <?= $form->field($model, 'booking_usefor') ?>

    <?php // echo $form->field($model, 'departments_id') ?>

    <?php // echo $form->field($model, 'booking_user') ?>

    <?php // echo $form->field($model, 'booking_tel') ?>

    <?php // echo $form->field($model, 'booking_title') ?>

    <?php // echo $form->field($model, 'booking_description') ?>

    <?php // echo $form->field($model, 'booking_seate') ?>

    <?php // echo $form->field($model, 'booking_breaks') ?>

    <?php // echo $form->field($model, 'booking_format') ?>

    <?php // echo $form->field($model, 'booking_budget') ?>

    <?php // echo $form->field($model, 'booking_cur_date') ?>

    <?php // echo $form->field($model, 'eqipment_notebook') ?>

    <?php // echo $form->field($model, 'eqipment_visualizer') ?>

    <?php // echo $form->field($model, 'eqipment_projector') ?>

    <?php // echo $form->field($model, 'eqipment_tv') ?>

    <?php // echo $form->field($model, 'eqipment_mic1') ?>

    <?php // echo $form->field($model, 'eqipment_mic2') ?>

    <?php // echo $form->field($model, 'eqipment_sound_record') ?>

    <?php // echo $form->field($model, 'eqipment_vdo_record') ?>

    <?php // echo $form->field($model, 'eqipment_photo_record') ?>

    <?php // echo $form->field($model, 'booking_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
