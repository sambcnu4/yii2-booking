<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Format */

$this->title = 'เพิ่มรูปแบบการจัด';
$this->params['breadcrumbs'][] = ['label' => 'รูปแบบการจัด', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="format-create">
    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
