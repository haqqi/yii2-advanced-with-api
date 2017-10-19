<?php

namespace api\base;

use yii\filters\auth\CompositeAuth;
use yii\filters\ContentNegotiator;
use yii\rest\Controller;
use yii\web\Response;

/**
 * Class ApiController
 * @package api\base
 */
class ApiController extends Controller
{
    /**
     * Override behaviors from rest controller
     *
     * @return array
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        // only allow json as return
        $behaviors['contentNegotiator'] = [
            'class'   => ContentNegotiator::className(),
            'formats' => [
                'application/json' => Response::FORMAT_JSON
            ]
        ];

        // setup authenticator
        // @todo: setup app key app secret auth, bearer, etc
        $behaviors['authenticators'] = [
            'class' => CompositeAuth::className()
        ];

        // @todo: add app version filter

        return $behaviors;
    }
}