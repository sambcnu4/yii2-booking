<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\contact\models\YellowPageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yellow-page-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'contact_name') ?>

    <?= $form->field($model, 'departments_id') ?>

    <?= $form->field($model, 'position') ?>

    <?= $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'ip_phone') ?>

    <?php // echo $form->field($model, 'tel1') ?>

    <?php // echo $form->field($model, 'tel2') ?>

    <?php // echo $form->field($model, 'tel3') ?>

    <?php // echo $form->field($model, 'mvpn') ?>

    <?php // echo $form->field($model, 'direct_line') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'status_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
