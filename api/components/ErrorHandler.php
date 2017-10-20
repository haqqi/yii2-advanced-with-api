<?php

namespace api\components;

class ErrorHandler extends \yii\web\ErrorHandler
{
    protected function convertExceptionToArray($exception) {
        $array = parent::convertExceptionToArray($exception);

        if($exception instanceof HttpException) {
            $array['data'] = $exception->getData();
        }

        return $array;
    }
}
