<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

$versionDir = 'v1'; // or you can use basename(__DIR__);

require __DIR__ . '/../../../vendor/autoload.php';
require __DIR__ . '/../../../vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/../../../common/config/bootstrap.php';
require __DIR__ . '/../../' . $versionDir . '/config/bootstrap.php';

$config = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../../../common/config/main.php',
    require __DIR__ . '/../../../common/config/main-local.php',
    require __DIR__ . '/../../' . $versionDir . '/config/main.php',
    require __DIR__ . '/../../' . $versionDir . '/config/main-local.php'
);

(new yii\web\Application($config))->run();
