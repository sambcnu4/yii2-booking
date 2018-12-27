<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\contact\models\YellowPageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yellow Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yellow-page-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Yellow Page', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'contact_name',
            'departments_id',
            'position',
            'location',
            //'email:email',
            //'ip_phone',
            //'tel1',
            //'tel2',
            //'tel3',
            //'mvpn',
            //'direct_line',
            //'fax',
            //'status_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
