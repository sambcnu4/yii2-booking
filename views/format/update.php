<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Format */

$this->title = 'แก้ไขรูปแบบการจัด: ' . $model->format_name;
$this->params['breadcrumbs'][] = ['label' => 'รูปแบบการจัด', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->format_name, 'url' => ['view', 'id' => $model->format_id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="format-update">
    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>

