<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BudgetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'รูปแบบที่มาของงบประมาณ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="budget-index">

<?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <p>
<?= Html::a('เพิ่มรูปแบบที่มาของงบประมาณ', ['create'], ['class' => 'btn btn-danger']) ?>
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
                    // 'budget_id',
                    'budget_name',
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
