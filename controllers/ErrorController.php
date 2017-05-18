<?php
/**
 * Created by PhpStorm.
 * User: M
 * Date: 17/5/17
 * Time: 下午3:03
 */

namespace app\controllers;

class ErrorController extends \yii\web\Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
}