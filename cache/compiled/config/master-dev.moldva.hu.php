<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1488102057,
    'checksum' => '40c081da4c77189cf7295ec7c9e03283',
    'files' => [
        'user/config' => [
            'plugins/email' => [
                'file' => 'user/config/plugins/email.yaml',
                'modified' => 1487333486
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1488057015
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1487333486
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1488102049
            ]
        ],
        'system/config' => [
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1487333486
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1487333486
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1487333486
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1487333486
            ]
        ],
        'user/plugins' => [
            'plugins/archives' => [
                'file' => 'user/plugins/archives/archives.yaml',
                'modified' => 1487333488
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1487333488
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1487333488
            ],
            'plugins/feed' => [
                'file' => 'user/plugins/feed/feed.yaml',
                'modified' => 1487333488
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1487333488
            ],
            'plugins/pagination' => [
                'file' => 'user/plugins/pagination/pagination.yaml',
                'modified' => 1487333490
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1487333490
            ],
            'plugins/random' => [
                'file' => 'user/plugins/random/random.yaml',
                'modified' => 1487333490
            ],
            'plugins/relatedpages' => [
                'file' => 'user/plugins/relatedpages/relatedpages.yaml',
                'modified' => 1487333490
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/simplesearch.yaml',
                'modified' => 1487333490
            ],
            'plugins/taxonomylist' => [
                'file' => 'user/plugins/taxonomylist/taxonomylist.yaml',
                'modified' => 1487333490
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'archives' => [
                'enabled' => true,
                'built_in_css' => true,
                'date_display_format' => 'F Y',
                'show_count' => true,
                'limit' => 12,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'filter_combinator' => 'and',
                'filters' => [
                    'category' => 'blog'
                ],
                'taxonomy_names' => [
                    'month' => 'archives_month',
                    'year' => 'archives_year'
                ]
            ],
            'email' => [
                'enabled' => true,
                'from' => 'your@email.here',
                'from_name' => NULL,
                'to' => 'your@email.here',
                'to_name' => NULL,
                'mailer' => [
                    'engine' => 'mail',
                    'smtp' => [
                        'server' => 'localhost',
                        'port' => 25,
                        'encryption' => 'none',
                        'user' => '',
                        'password' => ''
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail'
                    ]
                ],
                'content_type' => 'text/html',
                'debug' => false
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'feed' => [
                'enabled' => true,
                'limit' => 10,
                'description' => 'My Feed Description',
                'lang' => 'en-us',
                'length' => 500
            ],
            'form' => [
                'enabled' => true,
                'built_in_css' => true,
                'files' => [
                    'multiple' => false,
                    'limit' => 10,
                    'filesize' => 5,
                    'destination' => 'self@',
                    'avoid_overwriting' => false,
                    'random_name' => false,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ]
            ],
            'pagination' => [
                'enabled' => true,
                'built_in_css' => true,
                'delta' => 0
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'random' => [
                'enabled' => true,
                'route' => '/random',
                'redirect' => true,
                'filters' => [
                    'category' => 'blog'
                ],
                'filter_combinator' => 'and'
            ],
            'relatedpages' => [
                'enabled' => true,
                'limit' => 5,
                'show_score' => true,
                'score_threshold' => 20,
                'filter' => [
                    'items' => [
                        '@page' => '/blog'
                    ],
                    'order' => [
                        'by' => 'date',
                        'dir' => 'desc'
                    ]
                ],
                'page_in_filter' => true,
                'explicit_pages' => [
                    'process' => true,
                    'score' => 100
                ],
                'taxonomy_match' => [
                    'taxonomy' => 'tag',
                    'taxonomy_taxonomy' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 50,
                            2 => 75,
                            3 => 100
                        ]
                    ],
                    'taxonomy_content' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 20,
                            2 => 30,
                            3 => 45,
                            4 => 60,
                            5 => 70,
                            6 => 80,
                            7 => 90,
                            8 => 100
                        ]
                    ]
                ],
                'content_match' => [
                    'process' => false
                ]
            ],
            'simplesearch' => [
                'enabled' => true,
                'built_in_css' => true,
                'display_button' => false,
                'min_query_length' => 3,
                'route' => '/search',
                'template' => 'simplesearch_results',
                'filters' => [
                    'category' => 'blog'
                ],
                'filter_combinator' => 'and',
                'ignore_accented_characters' => true,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ]
            ],
            'taxonomylist' => [
                'enabled' => true,
                'route' => '/blog'
            ]
        ],
        'media' => [
            'types' => [
                'defaults' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'application/octet-stream',
                    'image' => [
                        'filters' => [
                            'default' => [
                                0 => 'enableProgressive'
                            ]
                        ]
                    ]
                ],
                'jpg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpe' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpeg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpeg.png',
                    'mime' => 'image/jpeg'
                ],
                'png' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-png.png',
                    'mime' => 'image/png'
                ],
                'gif' => [
                    'type' => 'animated',
                    'thumb' => 'media/thumb-gif.png',
                    'mime' => 'image/gif'
                ],
                'svg' => [
                    'type' => 'vector',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'image/svg+xml'
                ],
                'mp4' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mp4.png',
                    'mime' => 'video/mp4'
                ],
                'mov' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mov.png',
                    'mime' => 'video/quicktime'
                ],
                'm4v' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-m4v.png',
                    'mime' => 'video/x-m4v'
                ],
                'swf' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-swf.png',
                    'mime' => 'video/x-flv'
                ],
                'flv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-flv.png',
                    'mime' => 'video/x-flv'
                ],
                'webm' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'video/webm'
                ],
                'ogv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'video/ogg'
                ],
                'mp3' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-mp3.png',
                    'mime' => 'audio/mp3'
                ],
                'ogg' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'audio/ogg'
                ],
                'wma' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wma.png',
                    'mime' => 'audio/wma'
                ],
                'm4a' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-m4a.png',
                    'mime' => 'audio/m4a'
                ],
                'wav' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wav.png',
                    'mime' => 'audio/wav'
                ],
                'aiff' => [
                    'type' => 'audio',
                    'mime' => 'audio/aiff'
                ],
                'aif' => [
                    'type' => 'audio',
                    'mime' => 'audio/aif'
                ],
                'txt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-txt.png',
                    'mime' => 'text/plain'
                ],
                'xml' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xml.png',
                    'mime' => 'application/xml'
                ],
                'doc' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-doc.png',
                    'mime' => 'application/msword'
                ],
                'docx' => [
                    'type' => 'file',
                    'mime' => 'application/msword'
                ],
                'xls' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlt' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlm' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlsm' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xld' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xla' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlc' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlw' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xll' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'ppt' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pps' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'rtf' => [
                    'type' => 'file',
                    'mime' => 'application/rtf'
                ],
                'bmp' => [
                    'type' => 'file',
                    'mime' => 'image/bmp'
                ],
                'tiff' => [
                    'type' => 'file',
                    'mime' => 'image/tiff'
                ],
                'mpeg' => [
                    'type' => 'file',
                    'mime' => 'video/mpeg'
                ],
                'mpg' => [
                    'type' => 'file',
                    'mime' => 'video/mpeg'
                ],
                'mpe' => [
                    'type' => 'file',
                    'mime' => 'video/mpeg'
                ],
                'avi' => [
                    'type' => 'file',
                    'mime' => 'video/msvideo'
                ],
                'wmv' => [
                    'type' => 'file',
                    'mime' => 'video/x-ms-wmv'
                ],
                'html' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'htm' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'pdf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pdf.png',
                    'mime' => 'application/pdf'
                ],
                'zip' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-zip.png',
                    'mime' => 'application/zip'
                ],
                '7z' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-7zip.png',
                    'mime' => 'application/x-7z-compressed'
                ],
                'gz' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-gz.png',
                    'mime' => 'application/gzip'
                ],
                'tar' => [
                    'type' => 'file',
                    'mime' => 'application/x-tar'
                ],
                'css' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-css.png',
                    'mime' => 'text/css'
                ],
                'js' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-js.png',
                    'mime' => 'application/javascript'
                ],
                'json' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-json.png',
                    'mime' => 'application/json'
                ]
            ]
        ],
        'site' => [
            'title' => 'Grav',
            'default_lang' => 'en',
            'author' => [
                'name' => 'Team Grav',
                'email' => 'joe@test.com'
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag'
            ],
            'metadata' => [
                'description' => 'TwentyFifteen is a free and responsive theme for **Grav**. Its a port of TwentyFifteen template by HTML5UP.'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 300,
                'delimiter' => '==='
            ],
            'redirects' => NULL,
            'routes' => NULL,
            'blog' => [
                'route' => '/blog'
            ],
            'description' => 'Free and responsive theme for GRAV. Port of Twenty Fifteen template by Wordpress.org.',
            'menu' => [
                0 => [
                    'text' => 'External link',
                    'description' => 'External link with description.',
                    'link' => '#'
                ]
            ],
            'social' => [
                0 => [
                    'text' => 'Twitter',
                    'url' => 'http://twitter.com/getgrav'
                ],
                1 => [
                    'text' => 'Facebook',
                    'url' => 'http://facebook.com'
                ],
                2 => [
                    'text' => 'Google',
                    'url' => 'http://plus.google.com'
                ],
                3 => [
                    'text' => 'Github',
                    'url' => 'https://github.com/getgrav/grav'
                ]
            ],
            'presets' => [
                'dark' => [
                    'background_color' => '#111111',
                    'header_background_color' => '#202020',
                    'box_background_color' => '#202020',
                    'textcolor' => '#bebebe',
                    'secondary_textcolor' => 'rgba( 190, 190, 190, 0.7)',
                    'border_color' => 'rgba( 190, 190, 190, 0.1)',
                    'border_focus_color' => 'rgba( 190, 190, 190, 0.3)',
                    'sidebar_textcolor' => '#bebebe',
                    'sidebar_border_color' => 'rgba( 190, 190, 190, 0.1)',
                    'sidebar_border_focus_color' => 'rgba( 190, 190, 190, 0.3)',
                    'secondary_sidebar_textcolor' => 'rgba( 190, 190, 190, 0.7)',
                    'meta_box_background_color' => '#1b1b1b'
                ],
                'yellow' => [
                    'background_color' => '#f4ca16',
                    'header_background_color' => '#ffdf00',
                    'box_background_color' => '#ffffff',
                    'textcolor' => '#111111',
                    'secondary_textcolor' => 'rgba( 17, 17, 17, 0.7)',
                    'border_color' => 'rgba( 17, 17, 17, 0.1)',
                    'border_focus_color' => 'rgba( 17, 17, 17, 0.3)',
                    'sidebar_textcolor' => '#111111',
                    'sidebar_border_color' => 'rgba( 17, 17, 17, 0.1)',
                    'sidebar_border_focus_color' => 'rgba( 17, 17, 17, 0.3)',
                    'secondary_sidebar_textcolor' => 'rgba( 17, 17, 17, 0.7)',
                    'meta_box_background_color' => '#f1f1f1'
                ],
                'pink' => [
                    'background_color' => '#ffe5d1',
                    'header_background_color' => '#e53b51',
                    'box_background_color' => '#ffffff',
                    'textcolor' => '#352712',
                    'secondary_textcolor' => 'rgba( 53, 39, 18, 0.7)',
                    'border_color' => 'rgba( 53, 39, 18, 0.1)',
                    'border_focus_color' => 'rgba( 53, 39, 18, 0.3)',
                    'sidebar_textcolor' => '#ffffff',
                    'sidebar_border_color' => 'rgba( 255, 255, 255, 0.1)',
                    'sidebar_border_focus_color' => 'rgba( 255, 255, 255, 0.3)',
                    'secondary_sidebar_textcolor' => 'rgba( 255, 255, 255, 0.7)',
                    'meta_box_background_color' => '#f1f1f1'
                ],
                'purple' => [
                    'background_color' => '#674970',
                    'header_background_color' => '#2e2256',
                    'box_background_color' => '#ffffff',
                    'textcolor' => '#2e2256',
                    'secondary_textcolor' => 'rgba( 46, 34, 86, 0.7)',
                    'border_color' => 'rgba( 46, 34, 86, 0.1)',
                    'border_focus_color' => 'rgba( 46, 34, 86, 0.3)',
                    'sidebar_textcolor' => '#ffffff',
                    'sidebar_border_color' => 'rgba( 255, 255, 255, 0.1)',
                    'sidebar_border_focus_color' => 'rgba( 255, 255, 255, 0.3)',
                    'secondary_sidebar_textcolor' => 'rgba( 255, 255, 255, 0.7)',
                    'meta_box_background_color' => '#f1f1f1'
                ],
                'blue' => [
                    'background_color' => '#e9f2f9',
                    'header_background_color' => '#55c3dc',
                    'box_background_color' => '#ffffff',
                    'textcolor' => '#22313f',
                    'secondary_textcolor' => 'rgba( 34, 49, 63, 0.7)',
                    'border_color' => 'rgba( 34, 49, 63, 0.1)',
                    'border_focus_color' => 'rgba( 34, 49, 63, 0.3)',
                    'sidebar_textcolor' => '#ffffff',
                    'sidebar_border_color' => 'rgba( 255, 255, 255, 0.1)',
                    'sidebar_border_focus_color' => 'rgba( 255, 255, 255, 0.3)',
                    'secondary_sidebar_textcolor' => 'rgba( 255, 255, 255, 0.7)',
                    'meta_box_background_color' => '#f1f1f1'
                ]
            ]
        ],
        'streams' => [
            'schemes' => [
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => '',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'reverse_proxy_setup' => false,
            'force_ssl' => false,
            'custom_base_url' => '',
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
                'include_default_lang' => true,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => true,
                'override_locale' => false,
                'home_redirect' => [
                    'include_lang' => true,
                    'include_route' => false
                ]
            ],
            'home' => [
                'alias' => '/blog',
                'hide_in_urls' => false
            ],
            'pages' => [
                'theme' => 'twentyfifteen',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => 'd, Y',
                    'short' => 'Y-m-d',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'twig_first' => false,
                'never_cache_twig' => false,
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => true,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => [
                    0 => 'txt',
                    1 => 'xml',
                    2 => 'html',
                    3 => 'htm',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => '',
                'expires' => 604800,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => 301,
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'url_taxonomy_filters' => true,
                'frontmatter' => [
                    'process_twig' => false,
                    'ignore_fields' => [
                        0 => 'form',
                        1 => 'forms'
                    ]
                ]
            ],
            'cache' => [
                'enabled' => false,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'cli_compatibility' => false,
                'lifetime' => 604800,
                'gzip' => false,
                'allow_webserver_gzip' => false,
                'redis' => [
                    'socket' => false
                ]
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true,
                'umask_fix' => false
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_pipeline_include_externals' => true,
                'css_pipeline_before_excludes' => true,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_pipeline_include_externals' => true,
                'js_pipeline_before_excludes' => true,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
                ]
            ],
            'errors' => [
                'display' => 0,
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'shutdown' => [
                    'close_connection' => true
                ],
                'twig' => true
            ],
            'images' => [
                'default_image_quality' => 85,
                'cache_all' => false,
                'cache_perms' => '0755',
                'debug' => false,
                'auto_fix_orientation' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'upload_limit' => 0,
                'unsupported_inline_types' => [
                    
                ],
                'allowed_fallback_types' => [
                    
                ]
            ],
            'session' => [
                'enabled' => true,
                'timeout' => 1800,
                'name' => 'grav-site',
                'secure' => false,
                'httponly' => true,
                'split' => true,
                'path' => NULL
            ],
            'gpm' => [
                'releases' => 'stable',
                'proxy_url' => NULL,
                'method' => 'auto',
                'verify_peer' => true
            ]
        ],
        'security' => [
            'salt' => 'zodEbLYpJN3SR8'
        ]
    ]
];
