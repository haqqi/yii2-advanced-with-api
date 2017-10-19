<?php

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id'                  => 'ezypay-api',
    'basePath'            => dirname(__DIR__),
    'controllerNamespace' => 'api\controllers',
    'bootstrap'           => [
        'log',
        'v2'
    ],
    'modules'             => [
        'v2' => [
            'class' => \api\modules\v2\Module::className()
        ]
    ],
    'components'          => [
        'request'      => [
            // no need CSRF token
            'enableCsrfValidation' => false,
        ],
        'log'          => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager'   => [
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
            'rules'           => [

            ],
        ],
        'response'     => [
            'format' => \yii\web\Response::FORMAT_JSON
        ]
    ],
    'params'              => $params,
];
