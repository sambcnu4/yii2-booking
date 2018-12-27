<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Budget */

$this->title = 'เพิ่มรูปแบบที่มาของงบประมาณ';
$this->params['breadcrumbs'][] = ['label' => 'รูปแบบที่มาของงบประมาณ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="budget-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
