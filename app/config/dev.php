<?php
$common = require(__dir__ . '/common.php');

$dev = [
	'layout'=>false,
	'defaultRoute'=>'frontend',
	'bootstrap'=>['log','gii','debug'],
	'modules'=>[
		'gii'=>[
			'class' => 'yii\gii\Module',
		],
		'debug'=>[
			'class' => 'yii\debug\Module',
		],
		'frontend'=>[
			'class'=>'fully\modules\frontend\Module'
		]
	]
];

return array_merge($common,$dev);