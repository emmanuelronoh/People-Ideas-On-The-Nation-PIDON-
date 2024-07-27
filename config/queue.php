<?php

return [

    'default' => env('QUEUE_CONNECTION', 'sync'),

    'connections' => [
        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'jobs',
            'queue' => 'default',
            'retry_after' => 90,
        ],

        // Add other queue connections if needed
    ],

    'failed' => [
        'driver' => 'database',
        'table' => 'failed_jobs',
    ],

];
