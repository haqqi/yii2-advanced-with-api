<?php

namespace api\v1\controllers;

use api\v1\base\ApiController;
use api\v1\components\Response;

class SiteController extends ApiController
{
    public function actionIndex()
    {
        $response = new Response();

        $response->name    = 'API Status';
        $response->message = 'API is running';
        $response->code    = 0;
        $response->status  = 200;
        $response->data    = null;

        return $response;
    }
}
