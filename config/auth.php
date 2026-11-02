<?php

use App\Models\Admin;


return [



    'defaults' => [
        'guard' => 'admin',
    ],



    'guards' => [
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
    ],




    'providers' => [
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,
        ],
    ],




    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
