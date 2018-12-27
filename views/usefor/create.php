<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Usefor */

$this->title = 'เพิ่มลักษณะการใช้งาน';
$this->params['breadcrumbs'][] = ['label' => 'ลักษณะการใช้งาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usefor-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
