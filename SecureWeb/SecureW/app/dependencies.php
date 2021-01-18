<?php

// Register component on container

use Secure\ProcessOutput;
use Secure\SecureCWModel;
use Secure\SWrapper;
use Secure\Validator;
use Secure\XmlParser;

$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig(
        $container['settings']['view']['template_path'],
        $container['settings']['view']['twig'],
        [
            'debug' => true // This line should enable debug mode
        ]
    );

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};
    $container['validator'] = function ($container) {
        $validator = new Validator();
        return $validator;
    };
    $container['SoapWrapper'] = function ($container) {
    $validator = new SWrapper();
    return $validator;
    };


    $container['SecureCWModel'] = function ($container) {
        $model = new SecureCWModel();
        return $model;
    };
    $container['processOutput'] = function ($container) {
        $Smodel = new ProcessOutput();
        return $Smodel;
    };
    $container['xmlParser'] = function ($container) {
        $model = new XmlParser();
        return $model;
    };



