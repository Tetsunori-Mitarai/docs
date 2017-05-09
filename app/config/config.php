<?php

return [
    'app'           => [
        'version'         => '3.1.2',
        'timezone'        => getenv('APP_TIMEZONE'),
        'debug'           => getenv('APP_DEBUG'),
        'env'             => getenv('APP_ENV'),
        'url'             => getenv('APP_URL'),
        'name'            => getenv('APP_NAME'),
        'project'         => getenv('APP_PROJECT'),
        'description'     => getenv('APP_DESCRIPTION'),
        'keywords'        => getenv('APP_KEYWORDS'),
        'repo'            => getenv('APP_REPO'),
        'docs'            => getenv('APP_DOCS'),
        'baseUri'         => getenv('APP_BASE_URI'),
        'staticUrl'       => getenv('APP_STATIC_URL'),
        'lang'            => getenv('APP_LANG'),
        'supportEmail'    => getenv('APP_SUPPORT_EMAIL'),
    ],
    'cache'         => [
        'driver'          => getenv('CACHE_DRIVER'),
        'viewDriver'      => getenv('VIEW_CACHE_DRIVER'),
        'prefix'          => getenv('CACHE_PREFIX'),
        'lifetime'        => getenv('CACHE_LIFETIME'),
    ],
    'logger'        => [
        'defaultFilename' => getenv('LOGGER_DEFAULT_FILENAME'),
        'format'          => getenv('LOGGER_FORMAT'),
        'level'           => getenv('LOGGER_LEVEL'),
    ],
    'google'        => [
        'analytics'       => getenv('GOOGLE_ANALYTICS'),
    ],
    'routes'        => [
        'class'   => Docs\Controllers\DocsController::class,
        'methods' => [
            'get'      => [
                '/'                         => 'redirectAction',
                '/404'                      => 'fourohfourAction',
                '/{l:[a-z]{2}}'             => 'mainAction',
                '/{l:[a-z]{2}}/{v}'         => 'mainAction',
                '/{l:[a-z]{2}}/{v}/{p}'     => 'mainAction',
                '/{l:[a-z]{2}}/{v}/api/{p}' => 'mainAction',
            ],
        ],
    ],
    'languages'     => [
        'cs' => 'Czech',
        'en' => 'English',
        'fr' => 'French',
        'el' => 'Greek',
        'ja' => 'Japanese',
        'id' => 'Indonesian',
        'pl' => 'Polish',
        'ru' => 'Russian',
        'es' => 'Spanish',
        'uk' => 'Ukranian',
    ],
];
