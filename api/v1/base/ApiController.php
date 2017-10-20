<?php
/**
 * Created by PhpStorm.
 * User: Haqqi
 * Date: 10/20/2017
 * Time: 9:31 AM
 */

namespace api\v1\base;

use api\components\HttpException;
use yii\filters\auth\CompositeAuth;
use yii\filters\ContentNegotiator;
use yii\rest\Controller;
use yii\web\Response;

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

    public function afterAction($action, $result)
    {
        if (!$result instanceof \api\v1\components\Response) {
            throw new HttpException(500, 'Response should be instance of \api\components\Response');
        }

        if (($message = $result->validate()) !== true) {
            throw new HttpException(500, $message);
        }

        return parent::afterAction($action, $result);
    }
}
