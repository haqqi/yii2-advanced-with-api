<?php
/**
 * Created by PhpStorm.
 * User: Haqqi
 * Date: 10/19/2017
 * Time: 11:53 AM
 */

namespace api\exceptions;

use yii\web\HttpException;

/**
 * Class HttpExceptionWithData
 * @package api\exceptions
 *
 * Better http exception class for API with including data in the response.
 */
class HttpExceptionWithData extends HttpException
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