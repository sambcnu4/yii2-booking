<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Budget */

$this->title = 'แก้ไขรูปแบบที่มาของงบประมาณ: ' . $model->budget_name;
$this->params['breadcrumbs'][] = ['label' => 'รูปแบบที่มาของงบประมาณ', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->budget_name, 'url' => ['view', 'id' => $model->budget_id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="budget-update">

 
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
