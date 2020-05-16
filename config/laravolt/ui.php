<?php

return [
    'brand_name' => env('APP_NAME', 'Laravolt'),
    'brand_image' => env('APP_URL').'/img/x.png',
    'font_size' => 'small',
    'sidebar_theme' => '',
    'animation' => env('APP_URL').'laravolt/lottiefiles/scan.json',
    'login_theme' => false,
    'system_menu' => [
        'order' => 99,
    ],
    'quick_switcher' => false,
    'options' => [],
    'themes' => [
        'dark-blue' => [
            'topbar_inverted' => true,
        ],
        'teal' => [
            // 'topbar_inverted'   => true,
        ],
    ],
    'flash' => [
        'attributes' => [
            'class' => 'black',
        ],
        'except' => [],
    ],
    'mail' => [
        'header' => '#345',
        'body' => '#F2F5F7',
        'content' => [
            'color' => '#2E3C4A',
            'background' => '#FFFFFF',
        ],
        'button' => [
            'color' => '#FFFFFF',
            'background' => '#0570D4',
        ],
    ],
];
