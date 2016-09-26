<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '6J790_lHUG25jfLSUXccZaCKskqds9ta',
        ],
        /*'view' => [
			'theme' => [
				'pathMap' => [
					'@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
				],
			 ],
		],*/
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.1.*', '192.168.0.*'] // adjust this to your needs
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'generators' => [
                //'crud' => ['class' => 'dee\gii\generators\crud\Generator'],
                //'angular' => ['class' => 'dee\gii\generators\angular\Generator'],
                //'mvc' => ['class' => 'dee\gii\generators\mvc\Generator'],
                'migration' => ['class' => 'dee\gii\generators\migration\Generator'],
            ],
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.1.*', '192.168.0.*'] // adjust this to your needs
    ];
}

return $config;
