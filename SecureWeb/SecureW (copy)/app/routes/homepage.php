<?php
/**
 * routes.php
 *
 * display the check primes application routes
 *
 * allows the user to enter a value for testing if prime
 *
 * Author: CF Ingrams
 * Email: <cfi@dmu.ac.uk>
 * Date: 18/10/2015
 *
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/', function(Request $request, Response $response) use ($app)
{


    $html_output = $this->view->render($response,
        'homepageform.html.twig',
        [
            'css_path' => CSS_PATH,
            'landing_page' => $_SERVER["SCRIPT_NAME"],
            'method' => 'get',
            'action' => 'index.php',
            'initial_input_box_value' => null,
            'page_title' => 'M2M Service',
            'page_heading_1' => 'M2M Service',
            'page_text'=> 'Enter the details required, then press the button',
            'process_message'=> 'processMsgs',
        ]);

    $processed_output = processOutput($app, $html_output);

    return $processed_output;

})->setName('routes');

function processOutput($app, $html_output)
{
    $process_output = $app->getContainer()->get('processOutput');
    $html_output = $process_output->processOutput($html_output);
    return $html_output;
}

//function getMsgs($app)
//{
//    $country_detail_result = [];
//    $soap_wrapper = $app->getContainer()->get('soapWrapper');
//
//    $Secure_model = $app->getContainer()->get('SecureCWModel');
//    $Secure_model->setSoapWrapper($soap_wrapper);
//
//    $Secure_model->returnMsgs();
//    $Secure_result = $Secure_model->getResult();
//
//    return $Secure_result;
//
//}