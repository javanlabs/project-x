<?php

return [
    'layout'       => 'laravolt::layouts.auth',
    'captcha'      => false,
    'identifier'   => 'email',
    'login'        => [
        'implementation' => \Laravolt\Platform\Services\Login::class,
        'max_attempts' => 5,
        'decay_minutes' => 1,
    ],
    'registration' => [
        'enable'         => true,
        'status'         => 'ACTIVE',
        'implementation' => \Laravolt\Platform\Services\UserRegistrar::class,
    ],
    'activation'   => [
        'enable'        => true,
        'status_before' => \App\Enums\UserStatus::PENDING,
        'status_after'  => \App\Enums\UserStatus::ACTIVE,
    ],
    'password' => [
        'forgot' => [
            'implementation' => \Laravolt\Platform\Services\ForgotPassword::class,
            'identifier' => null,
        ],
        'reset' => [
            'implementation' => \Laravolt\Platform\Services\ResetPassword::class,
            'identifier' => null,
            'auto_login' => false,
        ],
    ],
    'cas'          => [
        'enable' => false,
    ],
    'router'       => [
        'middleware' => ['web'],
        'prefix'     => 'auth',
    ],
    'redirect'     => [
        'after_login'          => '/',
        'after_register'       => '/',
        'after_reset_password' => '/auth/login',

        // WARNING: after_logout redirection only valid for Laravel >= 5.7
        'after_logout'         => '/',
    ],

    // Whether to auto load migrations or not.
    // If set to false, then you must publish the migration files first before running the migrate command
    'migrations' => true,
];
