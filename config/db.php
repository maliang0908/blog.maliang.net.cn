<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=' . $SYSTEM_CONFIG['SYSTEM_DB_HOST'] . ':' . $SYSTEM_CONFIG['SYSTEM_DB_PORT'] . ';dbname=' . $SYSTEM_CONFIG['SYSTEM_DB_NAME'],
    'username' => $SYSTEM_CONFIG['SYSTEM_DB_USER'],
    'password' => $SYSTEM_CONFIG['SYSTEM_DB_PASS'],
    'charset' => $SYSTEM_CONFIG['SYSTEM_DB_CHARSET'],
    'tablePrefix' => $SYSTEM_CONFIG['SYSTEM_DB_TABLE_PREFIX']
];
