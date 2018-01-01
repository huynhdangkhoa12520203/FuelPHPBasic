<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
    Fuel::DEVELOPMENT => array(
        'type'          => 'mysql',
        'connection'    => array(
            'hostname'   => '192.168.33.50',
            'database'   => 'blogdb',
            'username'   => 'khoa',
            'password'   => 'khoa',
            'persistent' => false,
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => false,
        'profiling'    => false,
    ),

);
