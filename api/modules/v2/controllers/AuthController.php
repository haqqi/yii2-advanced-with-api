<?php
/**
 * Created by PhpStorm.
 * User: Haqqi
 * Date: 10/19/2017
 * Time: 11:25 AM
 */

namespace api\modules\v2\controllers;

use api\base\ApiController;

class AuthController extends ApiController
{
    public function actionRegister() {
        $response = [
            'name' => 'Register Success',
            'message' => ''
        ];

        return $response;
    }
}