<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\contact\models\YellowPage */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Yellow Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yellow-page-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'contact_name',
            'departments_id',
            'position',
            'location',
            'email:email',
            'ip_phone',
            'tel1',
            'tel2',
            'tel3',
            'mvpn',
            'direct_line',
            'fax',
            'status_id',
        ],
    ]) ?>

</div>
