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
    //'cache' => [
     //   'class' => 'yii\redis\Cache',
   // ],

    // 邮件配置
    'mailer' => [
        'class' => 'yii\swiftmailer\Mailer',
        'viewPath' => '@app/mail',
        'useFileTransport' =>false,//这句一定有，false发送邮件，true只是生成邮件在runtime文件夹下，不发邮件
        'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.163.com',  //每种邮箱的host配置不一样
            'username' => 'maliang_net_cn@163.com',
            'password' => 'maliang900908',
            'port' => '25',
            'encryption' => 'tls',
        ],
        'messageConfig'=>[
            'charset'=>'UTF-8',
            'from'=>['maliang_net_cn@163.com' => '马亮']
        ],
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
            ],
            // 发送邮件
           /* [
                'class' => 'yii\log\EmailTarget',
                'mailer' => 'mailer',
                'levels' => ['error'],
                'logVars' => [],
                'message' => [
                    'from' => ['maliang_net_cn@163.com' =>  '马亮'],
                    'to' => ['273327242@qq.com', '13141234768@163.com'],
                    'subject' => '系统错误邮件',
                ],
            ],*/
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
        'suffix' => '.html', //后缀
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
    //'redis' => require(__DIR__ . '/redis.php'),
];
