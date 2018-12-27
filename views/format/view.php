<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Format */

$this->title = $model->format_name;
$this->params['breadcrumbs'][] = ['label' => 'รูปแบบการจัด', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="format-view">


    <p>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->format_id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('ลบ', ['delete', 'id' => $model->format_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>
    <div class="box box-primary box-solid">
        <div class="box-header">
            <div class="box-title"><?= $this->title ?></div>
        </div>
        <div class="box-body"> 
            <?=
            DetailView::widget([
                'model' => $model,
                'attributes' => [
                    // 'format_id',
                    'format_name',
                ],
            ])
            ?>

        </div>
    </div>
</div>