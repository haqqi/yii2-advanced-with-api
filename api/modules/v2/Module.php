<?php

namespace api\modules\v2;

use yii\base\BootstrapInterface;

/**
 * Class Module
 * @package api\modules\v2
 */
class Module extends \yii\base\Module implements BootstrapInterface
{
    public function init()
    {
        parent::init();

        // configure module using config object
        \Yii::configure($this, require(__DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'main.php'));
    }

    /**
     * @param \yii\base\Application $app
     */
    public function bootstrap($app)
    {

    }
}
