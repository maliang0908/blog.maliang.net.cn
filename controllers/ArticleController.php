<?php
/**
 * Created by PhpStorm.
 * User: M
 * Date: 17/5/12
 * Time: 下午2:30
 */

namespace app\controllers;

use Yii;
use yii\web\NotFoundHttpException;

class ArticleController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionDetail()
    {
        return $this->render('detail');
    }

    public function actionAdd()
    {
        return $this->save();
    }

    public function actionEdit($id)
    {
        $id = intval($id);
        if($id < 1){
            throw new NotFoundHttpException('非法请求');
        }
        return $this->save($id);
    }

    public function save($id = 0)
    {
        if($id){

        }else{
            
        }
        return 1;
    }
}