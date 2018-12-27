<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Departments */

$this->title = 'แก้ไขหน่วยงาน: ' . $model->department_name;
$this->params['breadcrumbs'][] = ['label' => 'หน่วยงาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->department_name, 'url' => ['view', 'id' => $model->departments_id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="departments-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
