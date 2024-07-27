<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Route Prefixes
    |--------------------------------------------------------------------------
    |
    | This option defines the prefix for different groups of routes. 
    | You may want to define API routes or admin routes with specific prefixes.
    |
    */

    'prefixes' => [
        'api' => 'api/v1',
        'admin' => 'admin',
    ],

    /*
    |--------------------------------------------------------------------------
    | Route Middleware
    |--------------------------------------------------------------------------
    |
    | This option allows you to define global middleware that should be applied to
    | all routes. You may also define specific middleware for different route groups.
    |
    */

    'middleware' => [
        'web' => [
            'web',
            'auth',
        ],
        'api' => [
            'api',
            'auth:api',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Route Namespaces
    |--------------------------------------------------------------------------
    |
    | This option allows you to define namespaces for route controllers, which can
    | help organize and manage your controllers more effectively.
    |
    */

    'namespaces' => [
        'web' => 'App\Http\Controllers\Web',
        'api' => 'App\Http\Controllers\Api',
    ],

    /*
    |--------------------------------------------------------------------------
    | Route Caching
    |--------------------------------------------------------------------------
    |
    | This option enables route caching for better performance in production. 
    | You can enable or disable caching as needed.
    |
    */

    'cache' => [
        'enabled' => env('ROUTE_CACHE', true),
    ],

];
