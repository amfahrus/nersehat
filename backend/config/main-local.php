<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'uH8W42d4KR-lVtqDW1l5rIyhZxhT64Et',
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'pgsql:host=ec2-54-221-244-62.compute-1.amazonaws.com;dbname=d5ia2sbqqgdrgo', 
            'username' => 'eqpzrgalxrfpdq',
            'password' => 'RM381ZBeCzJnpLeo5N0qBU5M9S',
            'charset' => 'UTF8',
            'schemaMap' => [
              'pgsql'=> [
                'class'=>'yii\db\pgsql\Schema',
                'defaultSchema' => 'public' //specify your schema here
              ]
            ], // PostgreSQL
        ],
    ],
];

return $config;
