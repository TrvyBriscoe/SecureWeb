<?php

/**
 * Created by PhpStorm.
 * User: slim
 * Date: 13/10/17
 * Time: 12:33
 */

ini_set('display_errors', 'On');
ini_set('html_errors', 'On');
ini_set('xdebug.trace_output_name', 'm2m.%t');

define('DIRSEP', DIRECTORY_SEPARATOR);

$url_root = $_SERVER['SCRIPT_NAME'];
$url_root = implode('/', explode('/', $url_root, -1));
$css_path = $url_root . '/css/standard.css';
define('CSS_PATH', $css_path);
define('APP_NAME', 'M2M');
define('LANDING_PAGE', $_SERVER['SCRIPT_NAME']);

$wsdl = 'https://m2mconnect.ee.co.uk/preReadMessages.do?fromMenu=true';
define('WSDL', $wsdl);

$detail_types = ['send', 'read', 'full'];
define('DETAIL_TYPES', $detail_types);

$settings = [
    "settings" => [
        'displayErrorDetails' => true,
        'addContentLengthHeader' => false,
        'mode' => 'development',
        'debug' => true,
        'class_path' => __DIR__ . '/src/',
        'view' => [
            'template_path' => __DIR__ . '/templates/',
            'twig' => [
                'cache' => false,
                'auto_reload' => true,
            ],
      'pdo_settings' => [
      'rdbms' => 'mysql',
      'host' => 'localhost',
      'db_name' => 'p2507766_db',
      'port' => '3306',
      'user_name' => 'p2507766',
      'user_password' => 'p2507766_user_pass',
      'charset' => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'options' => [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => true,
    ],
]];

return $settings;