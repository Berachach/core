<?php
return [
    'Datasources' => [
        'default' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',
            'persistent' => false,
            'host' => 'localhost',
            'port' => 'OE_DATABASE_PORT',
            'username' => 'root',
            'password' => '',
            'database' => 'OE_DATABASE_SCHEMA',
            'encoding' => 'utf8mb4',
            'timezone' => 'UTC',
            'cacheMetadata' => true,
            'quoteIdentifiers' => true,
            //'init' => ['SET GLOBAL innodb_stats_on_metadata = 0'],
        ],
    ],
];
