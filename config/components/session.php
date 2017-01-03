<?php

use yii\helpers\ArrayHelper;

$defaults = [];

$drivers = [
    'file' => [
        'class' => 'yii\web\Session',
    ],
    'db' => [
        'class' => 'yii\web\DbSession',
        'sessionTable' => env('SESSION_DB_TABLE', '{{%session}}'),
    ],
];

return ArrayHelper::merge($defaults, $drivers[env('SESSION_DRIVER', 'file')]);