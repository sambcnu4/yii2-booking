<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Breaks */

$this->title = 'แก้ไขรูปแบบการจัดเบรค: ' . $model->breaks_name;
$this->params['breadcrumbs'][] = ['label' => 'รูปแบบการจัดเบรค', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->breaks_name, 'url' => ['view', 'id' => $model->breaks_id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="breaks-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
