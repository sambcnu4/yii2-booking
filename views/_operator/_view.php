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
use slavkovrn\prettyphoto\PrettyPhotoWidget;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Booking */
/* @var $form yii\widgets\ActiveForm */
?>
<p>
    <a class='btn btn-info' HREF="javascript:history.back()" ><i class="fa fa-reply"></i> ย้อนกลับ</a> 
    <?= Html::a('แก้ไข', ['update', 'id' => $model->booking_id], ['class' => 'btn btn-primary']) ?>

    <?=
    Html::a('ลบ', ['delete', 'id' => $model->booking_id], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Are you sure you want to delete this item?',
            'method' => 'post',
        ],
    ])
    ?>
</p>
<div class="box box-primary box-solid">



    <div class="box-header">
        <div class="box-title"> ระบบการจองห้องประชุม<small> HICRETE BOOKING RESERVATION</small></div>
    </div>
    <div class="box-body">  
        <?php $form = ActiveForm::begin(); ?>
        <div class="col-md-12">
            <div class="form-group">
                <div class="img-thumbnail"> 
                    <?php
                    echo PrettyPhotoWidget::widget([
                        'id' => $model->bookingRoom->room_img, // id of plugin should be unique at page
                        'class' => 'galary', // class of plugin to define a style
                        //'width' => '100%', // width of image visible in widget (omit - initial width)
                        'height' => '300px',
                        'images' => [
                            1 => [
                                'src' => $model->bookingRoom->photoViewer,
                                'title' => 'กดขยาย',
                            ],
                        ]
                    ]);
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-2"> 
            <div class="form-group">
                <?= $form->field($model, 'booking_no')->textInput(['disabled' => true]) ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?=
                $form->field($model, 'booking_room')->dropDownList(ArrayHelper::map(Room::find()->all(), 'room_id', 'room_name'), [
                    'disabled' => true,
                ])
                ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <?=
                $form->field($model, 'booking_usefor')->dropDownList(ArrayHelper::map(Usefor::find()->all(), 'usefor_id', 'usefor_name'), [
                    'disabled' => true,
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
                    'layout' => '{picker}{input}{remove}',
                    'disabled' => true,
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
                    'disabled' => true,
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
                    'disabled' => true,
                ])
                ?>
            </div>
        </div>
        <div class="col-md-4"> 
            <div class="form-group">
                <?= $form->field($model, 'booking_user')->textInput(['disabled' => true]) ?>
            </div>
        </div>
        <div class="col-md-4"> 
            <div class="form-group">
                <?= $form->field($model, 'booking_tel')->textInput(['disabled' => true]) ?>
            </div>
        </div>
        <div class="col-md-12"> 
            <div class="form-group">
                <?= $form->field($model, 'booking_title')->textInput(['disabled' => true]) ?>
            </div>
        </div>
        <div class="col-md-12"> 
            <div class="form-group">
                <?= $form->field($model, 'booking_description')->textarea(['rows' => 6, 'disabled' => true]) ?>
            </div>
        </div>
        <div class="col-md-1"> 
            <div class="form-group">
                <?= $form->field($model, 'booking_seate')->textInput(['disabled' => true]) ?>
            </div>
        </div>
        <div class="col-md-5"> 
            <div class="form-group">
                <?=
                $form->field($model, 'booking_breaks')->dropDownList(ArrayHelper::map(Breaks::find()->all(), 'breaks_id', 'breaks_name'), [
                    'disabled' => true,
                ])
                ?>
            </div>
        </div>
        <div class="col-md-4"> 
            <div class="form-group">
                <?=
                $form->field($model, 'booking_format')->dropDownList(ArrayHelper::map(Format::find()->all(), 'format_id', 'format_name'), [
                    'disabled' => true,
                ])
                ?>
            </div>
        </div>
        <div class="col-md-2"> 
            <div class="form-group">
                <?=
                $form->field($model, 'booking_budget')->dropDownList(ArrayHelper::map(Budget::find()->all(), 'budget_id', 'budget_name'), [
                    'disabled' => true,
                ])
                ?>
            </div>
        </div>


        <div class="col-md-2"> 
            <div class="form-group">
                <?php echo $form->field($model, 'eqipment_notebook')->checkbox(['value' => 'Y', 'disabled' => true]); ?>
            </div>
        </div>
        <div class="col-md-2"> 
            <div class="form-group">
                <?php echo $form->field($model, 'eqipment_visualizer')->checkbox(['value' => 'Y', 'disabled' => true]); ?>
            </div>
        </div>
        <div class="col-md-2"> 
            <div class="form-group">
                <?php echo $form->field($model, 'eqipment_projector')->checkbox(['value' => 'Y', 'disabled' => true]); ?>
            </div>
        </div>
        <div class="col-md-2"> 
            <div class="form-group">
                <?php echo $form->field($model, 'eqipment_tv')->checkbox(['value' => 'Y', 'disabled' => true]); ?>
            </div>
        </div>
        <div class="col-md-2"> 
            <div class="form-group">
                <?php echo $form->field($model, 'eqipment_mic1')->checkbox(['value' => 'Y', 'disabled' => true]); ?>
            </div>
        </div>
        <div class="col-md-2"> 
            <div class="form-group">
                <?php echo $form->field($model, 'eqipment_mic2')->checkbox(['value' => 'Y', 'disabled' => true]); ?>
            </div>
        </div>
        <div class="col-md-2"> 
            <div class="form-group">
                <?php echo $form->field($model, 'eqipment_sound_record')->checkbox(['value' => 'Y', 'disabled' => true]); ?>
            </div>
        </div>
        <div class="col-md-2"> 
            <div class="form-group">
                <?php echo $form->field($model, 'eqipment_vdo_record')->checkbox(['value' => 'Y', 'disabled' => true]); ?>
            </div>
        </div>
        <div class="col-md-6"> 
            <div class="form-group">
                <?php echo $form->field($model, 'eqipment_photo_record')->checkbox(['value' => 'Y', 'disabled' => true]); ?>
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
                    'disabled' => true,
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
                    'disabled' => true,
                ])
                ?>
            </div>
        </div> 
        <div class="col-md-12"> 
            <div class="form-group">
                <?=
                DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        ['attribute' => 'file',
                            'format' => 'html',
                            'value' => function ($model) {
                                return Html::a('ดูไฟล์แนบ Click!! ', $model->fileViewer, [
                                            'class' => 'btn btn-primary btn-sm',
                                            'target' => '_blank',
                                ]);
                            }
                        ],
                    ],
                ])
                ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>




