<?php

$config = [
    "database" => [
        "mysql" => [
            "host" => "127.0.0.1",
            "port" => 3307,
            "user" => "root",
            "password" => "root",
            "db_name" => "pwmodul5"
        ]
    ]
];

if (!function_exists('config')) {
    function config($key, $default = null)
    {
        global $config;

        $keys = explode('.', $key);
        $value = $config;

        foreach ($keys as $segment) {
            if (isset($value[$segment])) {
                $value = $value[$segment];
            } else {
                return $default;
            }
        }

        return $value;
    }
}
