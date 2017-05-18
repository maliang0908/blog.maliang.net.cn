<?php
/**
 * Created by PhpStorm.
 * User: M
 * Date: 17/5/12
 * Time: 下午2:31
 */

namespace app\controllers;

use Yii;

class PhotoAlbumController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionList()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $page = Yii::$app->request->get('page');
        $data1 = [
            ['src' => '/images/p1.jpg', 'title' => '图片1'],
            ['src' => '/images/p2.jpg', 'title' => '图片2'],
            ['src' => '/images/p3.jpg', 'title' => '图片3'],
            ['src' => '/images/p4.jpg', 'title' => '图片4'],
            ['src' => '/images/p5.jpg', 'title' => '图片5'],
            ['src' => '/images/p6.jpg', 'title' => '图片6'],
            ['src' => '/images/p7.jpg', 'title' => '图片7'],
            ['src' => '/images/p8.jpg', 'title' => '图片8'],
            ['src' => '/images/p1.jpg', 'title' => '图片1'],
            ['src' => '/images/p2.jpg', 'title' => '图片2'],
            ['src' => '/images/p3.jpg', 'title' => '图片3'],
            ['src' => '/images/p4.jpg', 'title' => '图片4'],
            ['src' => '/images/p5.jpg', 'title' => '图片5'],
            ['src' => '/images/p6.jpg', 'title' => '图片6'],
            ['src' => '/images/p7.jpg', 'title' => '图片7'],
            ['src' => '/images/p8.jpg', 'title' => '图片8']
        ];
        $data2 = [
            ['src' => '/images/p1.jpg', 'title' => '图片1'],
            ['src' => '/images/p2.jpg', 'title' => '图片2'],
            ['src' => '/images/p3.jpg', 'title' => '图片3'],
            ['src' => '/images/p4.jpg', 'title' => '图片4'],
            ['src' => '/images/p5.jpg', 'title' => '图片5'],
            ['src' => '/images/p6.jpg', 'title' => '图片6'],
            ['src' => '/images/p7.jpg', 'title' => '图片7'],
            ['src' => '/images/p8.jpg', 'title' => '图片8']
        ];
        return ['data' => $page == 1 ? $data1 : $data2, 'pages' => 3];
    }
}