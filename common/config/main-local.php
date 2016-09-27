<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'pgsql:host=ec2-54-221-244-62.compute-1.amazonaws.com;dbname=d5ia2sbqqgdrgo', 
            'username' => 'eqpzrgalxrfpdq',
            'password' => 'RM381ZBeCzJnpLeo5N0qBU5M9S',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
