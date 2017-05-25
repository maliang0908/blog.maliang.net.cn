<?php
$SYSTEM_CONFIG = parse_ini_file(__DIR__.'/../system/SYSTEM_CONFIG') ;

if(isset($SYSTEM_CONFIG['YII_DEBUG']) &&  $SYSTEM_CONFIG['YII_DEBUG']){
    define('YII_DEBUG', true);
}
if(isset($SYSTEM_CONFIG['YII_ENV']) &&  $SYSTEM_CONFIG['YII_ENV']){
    define('YII_ENV', 'dev');
}

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');
(new yii\web\Application($config))->run();
