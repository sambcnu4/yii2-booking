<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Usefor */

$this->title = 'แก้ไขลักษณะการใช้งาน: ' . $model->usefor_name;
$this->params['breadcrumbs'][] = ['label' => 'ลักษณะการใช้งาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->usefor_name, 'url' => ['view', 'id' => $model->usefor_id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="usefor-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
