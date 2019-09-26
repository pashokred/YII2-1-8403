<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'name' => 'GeekFramework',

    'id' => 'basic',

    'language' => 'ru',

    'basePath' => dirname(__DIR__),

    'bootstrap' => ['log'],

    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],

    'modules' => [
        'calendar' => [
            'class' => app\modules\calendar\Module::class,
        ],
    ],

    'components' => [
        'request' => [
            'cookieValidationKey' => 'Fet2SHWdQQCJgh9dFkbF2RksZkU-pDOr',
        ],

        'cache' => [
            'class' => yii\caching\FileCache::class,
        ],

        'user' => [
            'identityClass' => app\models\User::class,
            'enableAutoLogin' => true,
        ],

        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'mailer' => [
            'class' => yii\swiftmailer\Mailer::class,
            'useFileTransport' => true,
        ],

        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],

        'db' => $db,

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            //'enableStrictParsing' => true,
            'rules' => [
                //'/' => 'site/index',
                '/login' => 'site/login',

                '/users' => 'user/index',

                // user/view?id=1 => user/1
                'user/<id:\d+>' => 'user/view',

                // user/1/activities

                'user/<id:\d+>/activities' => 'user/activities',

                [
                    'class' => yii\rest\UrlRule::class,
                    'controller' => 'calendar/activity'
                ],

                'calendar/hello/<name>' => 'calendar/message/hello',
            ],
        ],

        'authManager' => [
            'class' => yii\rbac\DbManager::class,
        ],

        //'formatter' => [
        //    'dateFormat' => 'php:Y-m-d'
        //],
    ],

    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => yii\debug\Module::class,
        'allowedIPs' => ['*'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => yii\gii\Module::class,
        'allowedIPs' => ['*'],
    ];
}

return $config;
