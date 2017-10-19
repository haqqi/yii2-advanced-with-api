<?php

namespace api\modules\v2\components;

use yii\base\BaseObject;

/**
 * Class Response
 * @package api\modules\v2\components
 *
 * @author Haqqi <me@haqqi.net>
 *
 * Basic response class for API version 2
 */
class Response extends BaseObject
{
    /**
     * @var string Response name
     */
    public $name;

    /**
     * @var string Response message
     */
    public $message;

    /**
     * @var integer Response code, based on ApiCode
     */
    public $code;

    /**
     * @var integer Http status code
     */
    public $status;

    /**
     * @var mixed array for saving the data
     */
    public $data;
}
