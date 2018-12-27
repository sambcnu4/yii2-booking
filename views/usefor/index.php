<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UseforSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ลักษณะการใช้งาน';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usefor-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <p>
        <?= Html::a('เพิ่มลักษณะการใช้งาน', ['create'], ['class' => 'btn btn-danger']) ?>
    </p>
    <div class="box box-primary box-solid">
        <div class="box-header">
            <div class="box-title"><?= $this->title ?></div>
        </div>
        <div class="box-body"> 
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    //'usefor_id',
                    'usefor_name',
                    //['class' => 'yii\grid\ActionColumn'],
                    [
                        'class' => 'kartik\grid\ActionColumn',
                        'options' => ['style' => 'width:120px;'],
                        'buttonOptions' => ['class' => 'btn btn-default'],
                        'template' => '<div class="btn-group btn-group-xs text-center" role="group"> {view} {update} {delete}</div>'
                    ],
                ],
            ]);
            ?>
        </div>
    </div>
</div>
