<?php
/**
 * AssetBundle.php
 * @author Dhiraj Gupta
 * @link http://traversient.com
 */

namespace traversient\yii\customscrollbar;

/**
 * Class AssetBundle
 * @package dhiraj\yii\customscrollbar
 */
class AssetBundle extends \yii\web\AssetBundle
{

    /**
     * @inherit
     */
    public $sourcePath = '@bower/malihu-custom-scrollbar-plugin';

    /**
     * @inherit
     */
    public $css = [
        'jquery.mCustomScrollbar.css',
    ];

    public $js = [
        'jquery.mCustomScrollbar.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}