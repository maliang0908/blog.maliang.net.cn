<?php
/**
 * Created by PhpStorm.
 * User: M
 * Date: 17/5/12
 * Time: 下午2:32
 */

namespace app\controllers;


class MusicController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}