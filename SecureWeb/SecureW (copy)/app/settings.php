<?php
/**
 * Created by PhpStorm.
 * User: slim
 * Date: 13/10/17
 * Time: 12:33
 */

ini_set('display_errors', 'On');
ini_set('html_errors', 'On');
ini_set('xdebug.trace_output_name', 'session_example.%t');

$app_url = dirname($_SERVER['SCRIPT_NAME']);
$css_path = $app_url . '/css/SW.css';
define('CSS_PATH', $css_path);

$wsdl = 'https://m2mconnect.ee.co.uk/orange-soap/services/MessageServiceByCountry?wsdl';
define('WSDL', $wsdl);

$detail_types = ['username', 'password', 'count', 'deviceMsisdn,countryCode'];
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
      ]],
  ]
];

return $settings;
