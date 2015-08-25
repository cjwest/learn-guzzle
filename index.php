<?php
/**
 *
 */

require 'vendor/autoload.php';

use GuzzleHttp\Client;

echo "hello world";

$client = new Client([
    'base_uri' => 'https://demo.theftalertsystem.com:8443/tas_console/include/api.php',
  ]
);
$response = $client->get('?info=version');

var_dump($response);

$content = $content . "<p>Status Code: " . $response->getStatusCode() . '</p>';
$content = $content . '<p>Header: ' . $response->getHeader('content-type') . '</p>';
$content = $content . '<p>Body: ' . $response->getBody() . '</p>';

echo $content;