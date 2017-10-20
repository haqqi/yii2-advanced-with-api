<?php
$params = array_merge(
    require __DIR__ . '/../../../common/config/params.php',
    require __DIR__ . '/../../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id'                  => 'app-api-v1',
    'basePath'            => dirname(__DIR__),
    'controllerNamespace' => 'api\v1\controllers',
    'bootstrap'           => ['log'],
    'modules'             => [],
    'components'          => [
        'request'      => [
            'enableCookieValidation' => false,
            'enableCsrfCookie'       => false,
            'enableCsrfValidation'   => false
        ],
        'user'         => [
            'identityClass'   => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie'  => ['name' => '_identity-api', 'httpOnly' => true],
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
            'class' => \api\components\ErrorHandler::className()
        ],
        'urlManager'   => [
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
            'rules'           => [

            ],
        ],
    ],
    'params'              => $params,
];
