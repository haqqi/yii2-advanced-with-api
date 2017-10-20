<?php
/**
 * Created by PhpStorm.
 * User: Haqqi
 * Date: 10/20/2017
 * Time: 9:25 AM
 */

namespace api\components;

/**
 * Class HttpException
 *
 * Special HttpException for API. There is data property.
 *
 * @package api\components
 * @author  Haqqi <me@haqqi.net>
 */
class HttpException extends \yii\web\HttpException
{
    private $_data;

    public function __construct($status, $message = null, $data = [], $code = 0, \Exception $previous = null)
    {
        parent::__construct($status, $message, $code, $previous);

        $this->_data = $data;
    }

    public function getData()
    {
        return $this->_data;
    }
}