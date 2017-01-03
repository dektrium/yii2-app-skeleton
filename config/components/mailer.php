<?php

/**
 * Mailer configuration
 */

use yii\helpers\ArrayHelper;

$defaults = [
    'viewPath' => '@app/mail',
    'htmlLayout' => 'layouts/html',
    'textLayout' => 'layouts/text',
];

$drivers = [
    'file' => [
        'useFileTransport' => true,
    ],
    'sendmail' => [
        'transport' => [
            'class' => 'Swift_MailTransport',
        ],
    ],
    'smtp' => [
        'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => env('SMTP_HOST', 'localhost'),
            'username' => env('SMTP_USERNAME', null),
            'password' => env('SMTP_PASSWORD', null),
            'port' => env('SMTP_PORT', 25),
            'encryption' => env('SMTP_ENCRYPTION', null),
        ],
    ],
];

return ArrayHelper::merge($defaults, $drivers[env('MAILER_DRIVER', 'file')]);
