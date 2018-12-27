<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<div class="jumbotron">
      <h1><?=Html::img('https://hr.rmutr.ac.th/wp-content/uploads/2015/01/a4667850-421.png')?><?= Html::encode($this->title) ?></h1>
      <p class="text-danger"><?= nl2br(Html::encode($message)) ?></p>
      <p><a class="btn btn-default btn-lg" href="<?= Url::to(['/site/index'])?>" role="button">กลับหน้าแรก</a></p>
</div>

