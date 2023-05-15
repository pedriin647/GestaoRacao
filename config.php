<?php

return [

    "database" => [
        'host' => 'localhost',
        'dbname' => 'radicaldb',
        'user' => 'root',
        'pass' => '',
        'charset' => 'utf8',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ],
    ]
];