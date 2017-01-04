<?php

/**
 * Common configuration shared between console and web applications.
 */

require(__DIR__ . '/bootstrap.php');

return [
    'id' => 'my-application',
    'name' => 'My application',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'components' => [
        'cache' => require(__DIR__ . '/components/cache.php'),
        'db' => require(__DIR__ . '/components/db.php'),
        'mailer' => require(__DIR__ . '/components/mailer.php'),
        'urlManager' => require(__DIR__ . '/components/url.php'),
        'log' => require(__DIR__ . '/components/log.php')
    ],
    'params' => [
        
    ],
];
