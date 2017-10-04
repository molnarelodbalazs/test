<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/repositories/moldva.hu/user/config/system.yaml',
    'modified' => 1488102049,
    'data' => [
        'home' => [
            'alias' => '/blog'
        ],
        'pages' => [
            'theme' => 'twentyfifteen',
            'process' => [
                'markdown' => true,
                'twig' => false
            ],
            'markdown' => [
                'extra' => true
            ],
            'dateformat' => [
                'default' => 'd, Y',
                'short' => 'Y-m-d',
                'long' => 'F jS \\a\\t g:ia'
            ]
        ],
        'languages' => [
            'supported' => [
                0 => 'en',
                1 => 'de',
                2 => 'es',
                3 => 'fr',
                4 => 'it',
                5 => 'nl',
                6 => 'el',
                7 => 'pl'
            ],
            'http_accept_language' => true,
            'home_redirect' => [
                'include_lang' => true,
                'include_route' => false
            ],
            'session_store_active' => false
        ],
        'cache' => [
            'enabled' => false,
            'check' => [
                'method' => 'file'
            ],
            'driver' => 'auto',
            'prefix' => 'g'
        ],
        'twig' => [
            'cache' => true,
            'debug' => true,
            'auto_reload' => true,
            'autoescape' => false
        ],
        'assets' => [
            'css_pipeline' => false,
            'css_minify' => true,
            'css_rewrite' => true,
            'js_pipeline' => false,
            'js_minify' => true
        ],
        'debugger' => [
            'enabled' => false,
            'twig' => true,
            'shutdown' => [
                'close_connection' => true
            ]
        ]
    ]
];
