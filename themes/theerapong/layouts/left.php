<?php

use yii\helpers\Html;
use yii\helpers\Url;
use mdm\admin\components\Helper;
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= Yii::getAlias('@web') ?>/uploads/img/user.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= \Yii::$app->user->identity->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i></a>
            </div>
        </div>

        <div class="input-group">
            <br>
        </div>
        <?=
        dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                    'items' => [
                        //
                        ['label' => 'ระบบจองห้องประชุม (USER)', 'options' => ['class' => 'header']],
                        ['label' => 'ตารางการจอง', 'icon' => 'tasks text-orange', 'url' => ['/booking/index']],
                        ['label' => 'ปฏิทินการจอง', 'icon' => 'calendar text-orange', 'url' => ['/booking/calendar'],],
                        
                        //
                        ['label' => 'ระบบจัดการ (OPERATOR)', 'options' => ['class' => 'header']],
                        [
                            'label' => 'ระบบจัดการการจอง',
                            'icon' => 'cog text-red',
                            'url' => '#',
                            'items' => [
                                ['label' => 'ตารางการจอง', 'icon' => 'circle-o text-red', 'url' => ['/operator'],],
                                ['label' => 'ปฏิทินการจอง', 'icon' => 'circle-o text-red', 'url' => ['/operator/calendar'],],
                                ['label' => 'ห้องประชุม', 'icon' => 'circle-o text-blue', 'url' => ['/room'],],
                                ['label' => 'รูปแบบการจัดโต๊ะ', 'icon' => 'circle-o text-blue', 'url' => ['/format'],],
                                ['label' => 'ลักษณะการใช้งาน', 'icon' => 'circle-o text-blue', 'url' => ['/usefor'],],
                                ['label' => 'สถานะการจอง', 'icon' => 'circle-o text-blue', 'url' => ['/booking-status'],],
                                ['label' => 'รูปแบบการจัดเบรค', 'icon' => 'circle-o text-blue', 'url' => ['/breaks'],],
                                ['label' => 'รูปแบบงบ', 'icon' => 'circle-o text-blue', 'url' => ['/budget'],],
                                ['label' => 'หน่วยงาน', 'icon' => 'circle-o text-blue', 'url' => ['/departments'],],
                            ],
                        ],
                        ['label' => 'ตั้งค่าระบบ (ADMIN)', 'options' => ['class' => 'header']],
                        [
                            'label' => 'ตั้งค่าระบบ',
                            'icon' => 'cog text-red',
                            'url' => '#',
                            'items' => [
                                ['label' => 'จัดการผู้ใช้', 'icon' => 'circle-o text-red', 'url' => ['/user/admin'],],
                                ['label' => 'จัดการสิทธิ์', 'icon' => 'circle-o text-red', 'url' => ['/admin'],],
                                ['label' => 'รายงาน', 'icon' => 'file text-green', 'url' => ['/report'],],
                                ['label' => 'สร้าง Chart', 'icon' => 'file text-orange', 'url' => ['/chartbuilder'],],
                            ],
                        ],
                    //
                    //['label' => 'เข้าสู่ระบบ', 'options' => ['class' => 'header']],
                    ],
                ]
        )
        ?>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">ตรวจสอบตัวตน</li>
            <li>
                <?=
                Html::a('<i class="fa fa-sign-in text-green"></i><span> เข้าสู่ระบบ </span>', ['/user/security/login'], [
                        //'data' => [],
                        //'style' => 'text-align:left'
                ])
                ?>
            </li>
            <li>
                <?=
                Html::a('<i class="fa fa-sign-out text-red"></i><span> ออกจากระบบ (' . Yii::$app->user->identity->username . ')</span> ', ['/user/security/logout'], [
                    'data' => [
                        'method' => 'post',
                    ],
                        //'style' => 'text-align:left'
                ])
                ?>
            </li>
        </ul>

<!-- <div class="sidebar-menu tree"><a href="<?= Url::to(['/user/security/logout']) ?>" data-method="post">Logout <?= \Yii::$app->user->identity->username ?></a></div> -->
    </section>

</aside>
