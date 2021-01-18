<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/processMsgs', function(Request $request, Response $response) use ($app)

    {
        $processed_messages = processedmessages($app);
        $html_output = $this->view->render($response,
            'processMsgs.html.twig',
            [
                'css_path' => CSS_PATH,
                'landing_page' => $_SERVER["SCRIPT_NAME"],
                'page_title' => 'Messages received',
                'page_heading_1' => 'Enter details',
                'page_heading_2' => 'Shows stored messages',
                'messages_received'=> $processed_messages,
            ]);
    });

function processedmessages($app): array
{
    $processed_messages = [];

    $soap_wrapper = $app->getContainer()->get('SoapWrapper');
    $securemodel = $app->getContainer()->get('SecureCWModel');
    $settings = $app->getContainer()->get('settings');

    $m2macc = $settings['m2macc'];
    $processed_messages = $m2macc->processmessages($soap_wrapper, $securemodel);

    return $processed_messages;
}

;
