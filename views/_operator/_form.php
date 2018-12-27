<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
// widget
use kartik\date\DatePicker; //เรียกใช้งาน widget datepicker ของ kartik
use kartik\widgets\DateTimePicker;
use kartik\checkbox\CheckboxX;
use kartik\form\ActiveForm;
use app\models\Room;
use app\models\Usefor;
use app\models\Departments;
use app\models\Breaks;
use app\models\Format;
use app\models\Budget;
use app\models\BookingStatus;
//
use yii\web\UploadedFile;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Booking */
/* @var $form yii\widgets\ActiveForm */
?>
<p><a class='btn btn-info' HREF="javascript:history.back()" ><i class="fa fa-reply"></i> ย้อนกลับ</a></p> 
<div class="box box-primary box-solid">
    <div class="box-header">
        <div class="box-title"> ระบบการจองห้องประชุม<small> HICRETE BOOKING RESERVATION</small></div>
    </div>
    <div class="box-body">  
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

        
        <div class="col-md-2">
            <div class="form-group">
                <?= $form->field($model, 'booking_no')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <?=
                $form->field($model, 'booking_room')->dropDownList(ArrayHelper::map(Room::find()->all(), 'room_id', 'room_name'), [
                    'prompt' => 'กรุณาเลือก ...',
                ])
                ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <?=
                $form->field($model, 'booking_usefor')->dropDownList(ArrayHelper::map(Usefor::find()->all(), 'usefor_id', 'usefor_name'), [
                    'prompt' => 'กรุณาเลือก ...',
                ])
                ?>
            </div>
        </div>

        <div class="col-md-6"> 
            <div class="form-group">
                <?=
                $form->field($model, 'booking_start')->widget(DateTimePicker::className(), [
                    'name' => 'booking_start',
                    'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
                    //'type' => DateTimePicker::TYPE_INLINE,
                    'layout' => '{picker}{input}{remove}',
                    //'value' => '23-Feb-1982 10:10',
                    'pluginOptions' => [
                        'language' => 'th',
                        'todayHighlight' => true,
                        'autoclose' => true,
                        'format' => 'yyyy-m-d hh:ii'
                    ]
                ]);
                ?>
            </div>
        </div>
        <div class="col-md-6"> 
            <div class="form-group">
                <?=
                $form->field($model, 'booking_end')->widget(DateTimePicker::className(), [
                    'name' => 'booking_end',
                    'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
                    //'type' => DateTimePicker::TYPE_INLINE,
                    'layout' => '{picker}{input}{remove}',
                    //'value' => '23-Feb-1982 10:10',
                    'pluginOptions' => [
                        'language' => 'th',
                        'todayHighlight' => true,
                        'autoclose' => true,
                        'format' => 'yyyy-m-d hh:ii'
                    ]
                ]);
                ?>
            </div>
        </div>

        <div class="col-md-4"> 
            <div class="form-group">
                <?=
                $form->field($model, 'departments_id')->dropDownList(ArrayHelper::map(Departments::find()->all(), 'departments_id', 'department_name'), [
                    'prompt' => 'กรุณาเลือก ...',
                ])
                ?>
            </div>
        </div>
        <div class="col-md-6"> 
            <div class="form-group">
                <?= $form->field($model, 'booking_user')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="col-md-2"> 
            <div class="form-group">
                <?= $form->field($model, 'booking_tel')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="col-md-12"> 
            <div class="form-group">
                <?= $form->field($model, 'booking_title')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="col-md-12"> 
            <div class="form-group">
                <?= $form->field($model, 'booking_description')->textarea(['rows' => 6]) ?>
            </div>
        </div>
        <div class="col-md-1"> 
            <div class="form-group">
                <?= $form->field($model, 'booking_seate')->textInput() ?>
            </div>
        </div>
        <div class="col-md-5"> 
            <div class="form-group">
                <?=
                $form->field($model, 'booking_breaks')->dropDownList(ArrayHelper::map(Breaks::find()->all(), 'breaks_id', 'breaks_name'), [
                    'prompt' => 'กรุณาเลือก ...',
                ])
                ?>
            </div>
        </div>
        <div class="col-md-4"> 
            <div class="form-group">
                <?=
                $form->field($model, 'booking_format')->dropDownList(ArrayHelper::map(Format::find()->all(), 'format_id', 'format_name'), [
                    'prompt' => 'กรุณาเลือก ...',
                ])
                ?>
            </div>
        </div>
        <div class="col-md-2"> 
            <div class="form-group">
                <?=
                $form->field($model, 'booking_budget')->dropDownList(ArrayHelper::map(Budget::find()->all(), 'budget_id', 'budget_name'), [
                ])
                ?>
            </div>
        </div>
    </div>



    <div class="box-header">
        <div class="box-title"><small> อุปกรณ์</small></div>
    </div>
    <div class="box-body"> 
        <div class="col-md-2"> 
            <div class="form-group">
                <?php echo $form->field($model, 'eqipment_notebook')->checkbox(['value' => 'Y']); ?>
            </div>
        </div>
        <div class="col-md-2"> 
            <div class="form-group">
                <?php echo $form->field($model, 'eqipment_visualizer')->checkbox(['value' => 'Y']); ?>
            </div>
        </div>
        <div class="col-md-2"> 
            <div class="form-group">
                <?php echo $form->field($model, 'eqipment_projector')->checkbox(['value' => 'Y']); ?>
            </div>
        </div>
        <div class="col-md-2"> 
            <div class="form-group">
                <?php echo $form->field($model, 'eqipment_tv')->checkbox(['value' => 'Y']); ?>
            </div>
        </div>
        <div class="col-md-2"> 
            <div class="form-group">
                <?php echo $form->field($model, 'eqipment_mic1')->checkbox(['value' => 'Y']); ?>
            </div>
        </div>
        <div class="col-md-2"> 
            <div class="form-group">
                <?php echo $form->field($model, 'eqipment_mic2')->checkbox(['value' => 'Y']); ?>
            </div>
        </div>
        <div class="col-md-2"> 
            <div class="form-group">
                <?php echo $form->field($model, 'eqipment_sound_record')->checkbox(['value' => 'Y']); ?>
            </div>
        </div>
        <div class="col-md-2"> 
            <div class="form-group">
                <?php echo $form->field($model, 'eqipment_vdo_record')->checkbox(['value' => 'Y']); ?>
            </div>
        </div>
        <div class="col-md-6"> 
            <div class="form-group">
                <?php echo $form->field($model, 'eqipment_photo_record')->checkbox(['value' => 'Y']); ?>
            </div>
        </div>
        <div class="col-md-12"> 
            <div class="form-group">
                <?=
                $form->field($model, 'file')->widget(FileInput::classname(), [
                    'options' => [
                    //'accept' => 'application/pdf',
                    //'multiple' => true
                    ],
                    'pluginOptions' => [
                        'initialPreview' => [],
                        'language' => 'th',
                        'allowedFileExtensions' => ['pdf'],
                        'showPreview' => true,
                        'showRemove' => true,
                        'showUpload' => false,
                    ]
                ]);
                ?>
            </div>
        </div>
        <div class="col-md-6"> 
            <div class="form-group">

                <?=
                $form->field($model, 'booking_cur_date')->widget(DateTimePicker::className(), [
                    'name' => 'booking_end',
                    'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
                    //'type' => DateTimePicker::TYPE_INLINE,
                    'layout' => '{picker}{input}{remove}',
                    //'value' => '23-Feb-1982 10:10',
                    'pluginOptions' => [
                        'language' => 'th',
                        'todayHighlight' => true,
                        'autoclose' => true,
                        'format' => 'yyyy-m-d hh:ii'
                    ]
                ]);
                ?>
            </div>
        </div>
        <div class="col-md-6"> 
            <div class="form-group">
                <?php
                echo $form->field($model, 'booking_status')->dropDownList(ArrayHelper::map(BookingStatus::find()->all(), 'booking_status_id', 'booking_status_name'), [
                        // 'prompt' => 'กรุณาเลือก ...',
                ])
                ?>
            </div>
        </div> 

    </div>
    <div class="box-footer with-border">
        <div class="col-md-12"> 
            <div class="form-group">
                <?= Html::submitButton('บันทึก', ['class' => 'btn btn-success']) ?></p>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>




