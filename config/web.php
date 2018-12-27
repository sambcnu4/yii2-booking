<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'BOOKINGs',
    'name' => 'BOOKING DEMO',
    'language' => 'th_TH',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'modules' => [
        'contact' => [
            'class' => 'app\modules\contact\Module',
        ],
        'login' => [
            'class' => 'app\modules\login\Module',
        ],
        'rbac' => 'dektrium\rbac\RbacWebModule',
        'user' => [
            'class' => 'dektrium\user\Module',
            'enableUnconfirmedLogin' => true,
            'confirmWithin' => 21600,
            'cost' => 12,
            'admins' => ['admin'] // User ใหญ่
        ],
        'admin' => [
            'class' => 'mdm\admin\Module',
            'layout' => 'left-menu'
        ],
        'chartbuilder' => [
            'class' => 'yii2learning\chartbuilder\Module'
        ],
        'gridview' => [
            'class' => '\kartik\grid\Module'
        ]
    ],
    //------- สิทธิ์ ของการใช้ URL
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            //module, controller, action ที่อนุญาตให้ทำงานโดยไม่ต้องผ่านการตรวจสอบสิทธิ์
            'site/*',
            'user/security/login',
            'user/security/logout',
            //public
            'booking/index',
            'booking/view',
            'booking/calendar',
            //'admin/*',
            //'user/*',
            /*
             * ทำให้ใช้งานได้ทั้งหมดก่อน for dev เพิ่ม '*'
             */
            //'*',
            'some-controller/some-action',
        ]
    ],
    //-------
    'components' => [
        /*
          'mailer' => [
          'class' => 'yii\swiftmailer\Mailer',
          'viewPath' => '@common/mail',
          'useFileTransport' => false,
          'transport' => [
          'class' => 'Swift_SmtpTransport',
          'host' => 'smtp.gmail.com',
          'username' => 'sam47290800@gmail.com',
          'password' => 'theerapong2528',
          'port' => '587',
          'encryption' => 'tls',
          ],
          ],

          'mail' => [
          'class'            => 'zyx\phpmailer\Mailer',
          'viewPath'         => '@app/mail',
          'useFileTransport' => false,
          'config'           => [
          'mailer'     => 'smtp',
          'host'       => 'smtp.gmail.com',
          'port'       => '465',
          'smtpsecure' => 'ssl',
          'smtpauth'   => true,
          'username'   => 'sam47290800@gmail.com',
          'password'   => 'theerapong2528',
          ],

          ],
         */
        'authManager' => [
            //'class' => 'yii\rbac\DbManager',
            'class' => 'dektrium\rbac\components\DbManager'
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@app/themes/theerapong'  //theme style form adminLTE
                ],
            ],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'dnxv1zukqJPTIx53BbQk9YZP7h7v-Zo-',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            //'identityClass' => 'app\models\User',
            'identityClass' => 'dektrium\user\models\User', //ของ yii2-user
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        /*
         * enable PrettyUrl
         */
        'urlManager' => [
            'class' => 'yii\web\UrlManager', // Disable index.php
            'showScriptName' => false, // Disable r= routes
            'enablePrettyUrl' => true,
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                'module/<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
            ),
        ],
        'db' => $db,
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
            // uncomment the following to add your IP if you are not connecting from localhost.
            //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
            // uncomment the following to add your IP if you are not connecting from localhost.
            //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
