<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\contact\models\YellowPage */

$this->title = 'Create Yellow Page';
$this->params['breadcrumbs'][] = ['label' => 'Yellow Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yellow-page-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
