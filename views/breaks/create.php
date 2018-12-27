<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Breaks */

$this->title = 'เพิ่มรูปแบบการจัดเบรค';
$this->params['breadcrumbs'][] = ['label' => 'รูปแบบการจัดเบรค', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="breaks-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
