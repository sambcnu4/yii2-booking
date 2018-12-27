<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Room */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="room-form">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="box box-primary box-solid">
        <div class="box-header">
            <div class="box-title"><?= $this->title ?></div>
        </div>

        <div class="box-body">  
            <div class="col-md-4">
                <div class="form-group">
                    <?= $form->field($model, 'room_name')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-md-4"> 
                <div class="form-group">
                    <?= $form->field($model, 'room_seate')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-md-4"> 
                <div class="form-group">
                    <?= $form->field($model, 'room_size')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <div class="col-md-6"> 
                <div class="form-group">
                    <?= $form->field($model, 'room_description')->textarea(['rows' => 13]) ?>
                </div>
            </div>

            <div class="col-md-6"> 
                <div class="form-group">
                    <?=
                    $form->field($model, 'room_img')->widget(FileInput::classname(), [
                        'options' => [
                            'accept' => 'image/*',
                        //'multiple' => true
                        ],
                        'pluginOptions' => [
                            'initialPreview' => [],
                            'language' => 'th',
                            'allowedFileExtensions' => ['jpg', 'png', 'gif', 'pdf'],
                            'showPreview' => true,
                            'showRemove' => true,
                            'showUpload' => false
                        ]
                    ]);
                    ?>
                </div>
            </div>
        </div>
        <div class="box-footer with-border">
            <div class="form-group">
                <?= Html::submitButton('บันทึก', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
