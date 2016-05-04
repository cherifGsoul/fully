<?php
//var_dump(dirname(dirname(__DIR__)) . '/vendor');exit;
return [
    'id'=>'fully',
    'name'=>'Fully',
    'basePath' => dirname(__DIR__),
    'vendorPath'=>dirname(dirname(__DIR__)) . '/vendor',
    'bootstrap' => ['log'],
    'components'=>[
        'request' => [
            'cookieValidationKey' => 'yu_-XTtbfI5-VoTFyhfojcr2P9kpFNmq',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
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
        ]
    ]
];