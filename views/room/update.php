<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Room */

$this->title = 'แก้ไขห้องประชุม: ' . $model->room_name;
$this->params['breadcrumbs'][] = ['label' => 'ห้องประชุม', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->room_name, 'url' => ['view', 'id' => $model->room_id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="room-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
