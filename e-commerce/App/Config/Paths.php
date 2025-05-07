<?php
namespace App\Config;

class Paths {
    public static function get($type) {
        $paths = [
            'development' => [
                'user_views' => 'C:\Users\Eduardo\Documents\meus projs\dudumoveis\e-commerce\App\Views/',
                'assets' => 'C:\Users\Eduardo\Documents\meus projs\dudumoveis\e-commerce\public\assets/'
            ],
            'production' => [
                'user_views' => '/var/www/myproject/App/Views/userViews/',
                'assets' => '/var/www/myproject/public/assets/'
            ]
        ];

        $env = defined('ENVIRONMENT') ? ENVIRONMENT : 'development';
        return $paths[$env][$type];
    }
}