<?php
/**
 * Created by PhpStorm.
 * User: M
 * Date: 17/4/5
 * Time: 上午10:17
 */

return [
    'request' => [
        'cookieValidationKey' => 'D_a28UPFjIcYbDT-7pt9YnBunixsdTcg',
    ],

    // 缓存配置
    'cache' => [
        'class' => 'yii\redis\Cache',
    ],

    // 日志配置
    'log' => [
        'traceLevel' => YII_DEBUG ? 3 : 0,
        'targets' => [
            [
                'class' => 'yii\log\FileTarget',
                'levels' => ['error', 'warning'],
                'logFile'=>'@runtime/logs/abnormal.log',
            ],
            [
                'class' => 'yii\log\FileTarget',
                'logFile'=>'@runtime/logs/normal.log',
                'levels' => ['info','profile'],
                'logVars'=>['_GET', '_POST', '_COOKIE']
            ]
        ]
    ],

    // 错误页面
    'errorHandler' => [
        'errorAction' => 'erroe/error',
    ],

    // 路由配置
    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName'  => false, //隐藏index.php
        //'suffix' => '.html', //后缀
        'rules' => require(__DIR__ . '/rules.php'),
    ],

    // 资源管理修改
    'assetManager' => [
        'bundles' => [
            // 去掉自己的bootstrap 资源
            /*'yii\bootstrap\BootstrapAsset' => [
                'js' => []
            ],*/
            // 去掉自己加载的Jquery
            /*'yii\web\JqueryAsset' => [
               'js' => [],
            ]*/
        ],
    ],

    // 权限管理
    'authManager' => [
        'class' => 'yii\rbac\DbManager',
        //'defaultRoles' => ["guest"],
    ],

    // 用户管理
    'user' => [
        'identityClass' => 'app\models\User',
        'enableAutoLogin' => false,
        'authTimeout'     => 24*60*60
    ],
    
    // 数据库配置
    'db' => require(__DIR__ . '/db.php'),

    // Redis配置
    'redis' => require(__DIR__ . '/redis.php'),
];