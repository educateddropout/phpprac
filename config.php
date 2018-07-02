<?php

return [
    'database' => [
        'name' => 'laracast',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=localhost',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];
