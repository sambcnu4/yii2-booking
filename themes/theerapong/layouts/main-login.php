<?php

use backend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

dmstr\web\AdminLteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
        <style>
            body {
                font-family: 'Mali', cursive;
                /*  font-family: 'Kanit', sans-serif;
                  font-family: 'Sriracha', cursive; */

            }
            h1,h2,h3,h4 {
                font-family: 'Mali', cursive;
                /* font-family: 'Kanit', sans-serif;
              font-family: 'Sriracha', cursive; */
            }
            body.login-page {
                background-image: url("http://localhost/booking2/datas/bg_image.png");
                background-size: cover;
                //opacity:0.5;
            }
            login-box{

            }
        </style>
    </head>
    <body class="login-page">

        <?php $this->beginBody() ?>

        <?= $content ?>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
