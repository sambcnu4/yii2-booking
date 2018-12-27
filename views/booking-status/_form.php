<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\color\ColorInput;

/* @var $this yii\web\View */
/* @var $model app\models\BookingStatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-status-form">
    <div class="box box-primary box-solid">
        <div class="box-header">
            <div class="box-title"><?= $this->title ?></div>
        </div>
        <div class="box-body"> 
            <?php $form = ActiveForm::begin(); ?>
            <div class="form-group">
                <?= $form->field($model, 'booking_status_name')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="form-group">
                <?= $form->field($model, 'booking_statust_color')->widget(ColorInput::classname(), ['options' => ['placeholder' => 'เลือกสี'],]); ?>  
            </div>
        </div>
        <div class="box-footer with-border">
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
