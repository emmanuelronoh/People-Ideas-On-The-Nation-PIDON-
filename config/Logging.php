<?php

return [

    'default' => env('LOG_CHANNEL', 'stack'),

    'channels' => [

        'stack' => [
            'driver' => 'stack',
            'channels' => ['single'],
            'ignore_exceptions' => false,
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => 'debug',
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
            'level' => 'debug',
            'days' => 14,
        ],

        'slack' => [
            'driver' => 'slack',
            'url' => env('SLACK_WEBHOOK_URL'),
            'username' => 'Laravel Log',
            'emoji' => ':boom:',
            'level' => 'critical',
        ],

        'papertrail' => [
            'driver' => 'monolog',
            'handler' => \Monolog\Handler\SocketHandler::class,
            'handler_with' => [
                'connectionString' => env('PAPERTRAIL_URL'),
            ],
            'level' => 'debug',
        ],

        'stderr' => [
            'driver' => 'monolog',
            'handler' => \Monolog\Handler\StreamHandler::class,
            'handler_with' => [
                'stream' => 'php://stderr',
            ],
            'level' => 'debug',
        ],

        'errorlog' => [
            'driver' => 'errorlog',
            'level' => 'debug',
        ],

    ],

];
