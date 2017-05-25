<?php
/**
 * Created by PhpStorm.
 * User: M
 * Date: 17/4/5
 * Time: 下午1:20
 */

return [
    'class' => 'yii\redis\Connection',
    'hostname' => $SYSTEM_CONFIG['SYSTEM_REDIS_HOST'],
    'port' => $SYSTEM_CONFIG['SYSTEM_REDIS_PORT'],
    'password' => $SYSTEM_CONFIG['SYSTEM_REDIS_PASS']
    'database' => $SYSTEM_CONFIG['SYSTEM_REDIS_DATABASE']
];
