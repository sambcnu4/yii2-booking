<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\contact\models\YellowPageStatus */

$this->title = 'Create Yellow Page Status';
$this->params['breadcrumbs'][] = ['label' => 'Yellow Page Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yellow-page-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
