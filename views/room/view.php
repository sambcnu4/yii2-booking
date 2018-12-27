<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use slavkovrn\prettyphoto\PrettyPhotoWidget;

/* @var $this yii\web\View */
/* @var $model app\models\Room */

$this->title = $model->room_name;
$this->params['breadcrumbs'][] = ['label' => 'ห้องประชุม', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-view">

    <p>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->room_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->room_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
<div class="box box-success box-solid">
        <div class="box-header">
            <div class="box-title"><?= $this->title ?></div>
        </div>
        <div class="box-body"> 
            <div class="img-thumbnail"> 
                <?php
                echo PrettyPhotoWidget::widget([
                    'id' => $model->room_img, // id of plugin should be unique at page
                    'class' => 'galary', // class of plugin to define a style
                    'width' => '300px', // width of image visible in widget (omit - initial width)
                    //'height' => '180px',
                    'images' => [
                        1 => [
                            'src' => $model->photoViewer,
                            'title' => 'กดขยาย',
                        ],
                    ]
                ]);
                ?>
            </div>
            <hr>

            <?php
            echo
            DetailView::widget([
                'model' => $model,
                'template' => '<tr><th>{label}</th><td> {value}</td></tr>',
                'attributes' => [
                    //'room_id',
                    'room_name',
                    'room_seate',
                    'room_size',
                    'room_description:ntext',
                // 'room_img',
                ],
            ])
            ?>
        </div>
    </div>

</div>
