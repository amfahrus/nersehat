<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
	'name' => 'nerSehat',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
		'admin' => [
            'class' => 'mdm\admin\Module',
        ], 
        'gii' => [
            'class' => 'yii\gii\Module',
            'generators' => [
                //'crud' => ['class' => 'dee\gii\generators\crud\Generator'],
                //'angular' => ['class' => 'dee\gii\generators\angular\Generator'],
                //'mvc' => ['class' => 'dee\gii\generators\mvc\Generator'],
                'migration' => ['class' => 'dee\gii\generators\migration\Generator'],
            ],
        ], 
    ],
    'components' => [
        'db' => [
                'class' => 'yii\db\Connection',
                'dsn' => 'pgsql:host=ec2-54-221-244-62.compute-1.amazonaws.com;dbname=d5ia2sbqqgdrgo', 
                'username' => 'eqpzrgalxrfpdq',
                'password' => 'RM381ZBeCzJnpLeo5N0qBU5M9S',
                /*'dsn' => 'pgsql:host=localhost;dbname=nersehat', 
                'username' => 'postgres',
                'password' => 'postgres',*/
                'charset' => 'UTF8',
                'schemaMap' => [
                  'pgsql'=> [
                    'class'=>'yii\db\pgsql\Schema',
                    'defaultSchema' => 'public' //specify your schema here
                  ]
                ], // PostgreSQL
            ],
        'request' => [
            'csrfParam' => '_csrf-backend',
            //'parsers' => ['application/json' => 'yii\web\JsonParser',],
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'assetManager' => [
			'bundles' => [
				'dmstr\web\AdminLteAsset' => [
					'skin' => 'skin-blue',
				],
			],
		],
       	'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ]
        ],
        
    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
            //'country/*',
            'admin/*',
            //'gii/*',
            //'some-controller/some-action',
            // The actions listed here will be allowed to everyone including guests.
            // So, 'admin/*' should not appear here in the production, of course.
            // But in the earlier stages of your development, you may probably want to
            // add a lot of actions here until you finally completed setting up rbac,
            // otherwise you may not even take a first step.
        ]
    ],
    'params' => $params,
];
