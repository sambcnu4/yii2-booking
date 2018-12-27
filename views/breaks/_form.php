<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Breaks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="breaks-form">
    <div class="box box-primary box-solid">
        <div class="box-header">
            <div class="box-title"><?= $this->title ?></div>
        </div>
        <div class="box-body"> 
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'breaks_name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'breaks_budget')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('บันทึก', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
