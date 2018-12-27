<?php

use yii\helpers\Html;
use app\controllers\SiteController;

/* @var $this yii\web\View */

//$this->title = 'HOME';
?>
<div class="raw">
        <p><?= Html::a('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> เพิ่มการจองกดที่นี่', ['/booking/create'], ['class' => 'btn btn-danger']) ?> 
       <?= Html::a('<span class="glyphicon glyphicon-search" aria-hidden="true"></span> ดูตารางการจองกดที่นี่', ['/booking/index'], ['class' => 'btn btn-primary']) ?>  
         <?= Html::a('<span class="glyphicon glyphicon-search" aria-hidden="true"></span> ดูปฏิทินการจองกดที่นี่', ['/booking/calendar'], ['class' => 'btn btn-info']) ?></p>
    </div>
<div class="site-index">

    <div class="jumbotron">
        <h1>สามารถนำไปพัฒนาได้ตามสบายเลยครับ<br>"หากท่านใดพัฒนาแล้วช่วยส่งมาให้ <a href="mailto:sam47290800@gmail.com">sam47290800@gmail.com</a> ด้วยนะครับ"</h1>
    </div>
    
    <div class="raw">
        <div class="body-content">

            <div class="row">
                <div class="col-lg-4">
                    <h2>ส่วนของผู้ใช้งาน</h2>

                    <p>username สำหรับทดสอบเข้าสู่ระบบคือ <br>
                        username : user <br>
                        password : 123456
                    
                    </p>

                    <p><?= Html::a('ดูเพิ่มเติม &raquo;', ['/site/manualuser'], ['class' => 'btn btn-default']) ?></p>
                </div>
                <div class="col-lg-4">
                    <h2>ส่วนของผู้ปฏิบัติการ</h2>

                    <p>username สำหรับทดสอบเข้าสู่ระบบคือ <br>
                        username : operator <br>
                        password : 123456
                    
                    </p>

                    <p><?= Html::a('ดูเพิ่มเติม &raquo;', ['/site/manualadmin','name'=>'Theerapong Khanta'], ['class' => 'btn btn-default']) ?></p>
                </div>
                <div class="col-lg-4">
                    <h2>ส่วนของผู้ดูแลระบบ</h2>

                    <p>username สำหรับทดสอบเข้าสู่ระบบคือ <br>
                        username : admin <br>
                        password : 123456
                    
                    </p>

                    <p><?= Html::a('ดูเพิ่มเติม &raquo;', ['/site/manualadmin'], ['class' => 'btn btn-default']) ?></p>
                </div>
            </div>

        </div>
    </div>

</div>
