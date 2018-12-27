<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Usefor */

$this->title = $model->usefor_name;
$this->params['breadcrumbs'][] = ['label' => 'ลักษณะการใช้งาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usefor-view">


    <p>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->usefor_id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('ลบ', ['delete', 'id' => $model->usefor_id], [
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
                    //'usefor_id',
                    'usefor_name',
                ],
            ])
            ?>

        </div>
    </div>
</div>
