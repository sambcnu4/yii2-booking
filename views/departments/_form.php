<?php

use kartik\color\ColorInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Departments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departments-form">
<div class="box box-primary box-solid">
        <div class="box-header">
            <div class="box-title"><?=$this->title?></div>
        </div>
        <div class="box-body">
            <?php $form = ActiveForm::begin();?>
                <?=$form->field($model, 'department_name')->textInput(['maxlength' => true])?>
        
                        <div class="form-group">
                <div class="form-group">
                            <?=$form->field($model, 'color')->widget(ColorInput::classname(), ['options' => ['placeholder' => 'เลือกสี']]);?>
                        </div>
                    </div>

                <div class="form-group">
                    <?=Html::submitButton('บันทึก', ['class' => 'btn btn-success'])?>
            </div>
                    </div>
    <?php ActiveForm::end();?>
    </div>
</div>

