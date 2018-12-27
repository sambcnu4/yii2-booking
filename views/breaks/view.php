<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Breaks */

$this->title = $model->breaks_name;
$this->params['breadcrumbs'][] = ['label' => 'รูปแบบการจัดเบรค', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="breaks-view">

    <p>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->breaks_id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('ลบ', ['delete', 'id' => $model->breaks_id], [
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
                    //'breaks_id',
                    'breaks_name',
                    'breaks_budget',
                ],
            ])
            ?>

        </div>
    </div>
</div>
