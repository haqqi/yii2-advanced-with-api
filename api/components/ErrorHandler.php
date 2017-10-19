<?php

namespace api\components;

use api\exceptions\HttpExceptionWithData;

class ErrorHandler extends \yii\web\ErrorHandler
{
    protected function convertExceptionToArray($exception) {
        $array = parent::convertExceptionToArray($exception);

        if($exception instanceof HttpExceptionWithData) {
            $array['data'] = $exception->getData();
        }

        return $array;
    }
}
