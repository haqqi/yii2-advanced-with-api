<?php
/**
 * Created by PhpStorm.
 * User: Haqqi
 * Date: 10/19/2017
 * Time: 11:25 AM
 */

namespace api\modules\v2\controllers;

use api\base\ApiController;
use api\components\Response;

class AuthController extends ApiController
{
    public function actionRegister()
    {
        $response = new Response();

        $response->name    = 'Register success';
        $response->message = 'Registration with phone number xxxx success. Please activate using code sent via sms';
        $response->code    = 1;
        $response->status  = 200;
        $response->data    = null;

        return $response;
    }
}