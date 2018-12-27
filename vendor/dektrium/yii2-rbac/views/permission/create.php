<?php
/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

/**
 * @var $model dektrium\rbac\models\Role
 * @var $this  yii\web\View
 */
$this->title = Yii::t('rbac', 'Create new permission');
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $this->beginContent('@dektrium/rbac/views/layout.php') ?>
<div class="car-booking-index">
    <div class="box box-danger   box-solid">
        <div class="box-header">
            <div class="box-title"> <?= $this->title ?></div>
        </div>
        <div class="box-body"> 
            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>

            <?php $this->endContent() ?>
        </div>
    </div>
</div>
