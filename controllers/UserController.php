<?php
/**
 * Created by PhpStorm.
 * User: M
 * Date: 17/5/12
 * Time: 下午3:10
 */

namespace app\controllers;

use YII;
use app\models\User;
use yii\bootstrap\ActiveForm;

class UserController extends Controller
{
    public function actionLogin()
    {
        $this->layout = 'form';
        $user = new User();
        $request = Yii::$app->request;

        if($request->isAjax && $user->load($request->post())){
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return ActiveForm::validate($user);
        }

        if($request->isPost){
            if($user->load($request->post()) && $user->validate()){
                return 1;
            }
        }
        return $this->render('login', [
            'user' => $user
        ]);
    }

    public function actionLogout()
    {

    }

    public function actionRegister()
    {

    }
    
}