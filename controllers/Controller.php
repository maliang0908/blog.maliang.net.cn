<?php
/**
 * Created by PhpStorm.
 * User: M
 * Date: 17/5/12
 * Time: 下午1:53
 */

namespace app\controllers;

use Yii;

class Controller extends \yii\web\Controller
{
    /**
     * 判断浏览
     * @param $id
     * @return bool
     */
    public function isBrowse($id)
    {
        $id = intval($id);
        if($id > 0){
            $browseArray = Yii::$app->request->cookies->getValue('browseArray', []);
            if(!in_array($id, $browseArray)){
                $browseArray[] = $id;
                Yii::$app->response->cookies->add(new \yii\web\Cookie([
                    'name' => 'browseArray',
                    'value' => $browseArray
                ]));
                return true;
            }
        }
        return false;

    }
}