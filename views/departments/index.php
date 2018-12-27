<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;

use yii\helpers\ArrayHelper;
use app\models\Departments;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DepartmentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'หน่วยงาน';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departments-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?=Html::a('เพิ่มหน่วยงาน', ['create'], ['class' => 'btn btn-success'])?>
    </p>
    <div class="box box-primary box-solid">
        <div class="box-header">
            <div class="box-title"><?=$this->title?></div>
        </div>
        <div class="box-body">
    <?=GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        //'departments_id',
        'department_name',
        //'color',
        [
            'attribute' => 'color',
            'format' => 'html',
            'value' => function ($model) {
                return '<span class="badge" style="background-color:' . $model->color . ';"><b>' . $model->color . '</b></span>';
                //return '<p class="lable" style="color:' . $model->status->color  . ';">' . $model->status->status_name . '</p>';
            },
            'filter' => Html::activeDropDownList($searchModel, 'color', ArrayHelper::map(Departments::find()->all(), 'departments_id', 'color'), ['class' => 'form-control', 'prompt' => 'ทั้งหมด...'])
        ],

        //['class' => 'yii\grid\ActionColumn'],
        [
            'class' => 'kartik\grid\ActionColumn',
            'options' => ['style' => 'width:120px;'],
            'buttonOptions' => ['class' => 'btn btn-default'],
            'template' => '<div class="btn-group btn-group-xs text-center" role="group"> {view} {update} {delete}</div>'
        ],
    ],
]);?>
        </div>
    </div>
</div>
