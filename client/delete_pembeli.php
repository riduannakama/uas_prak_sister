<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;


$id = $_GET['id'];

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8080',
    'timeout' => 5
]);

$response = $client->request('DELETE', '/api/pembeli', ['json' => [
    'id' => $id,
]]);
$body = $response->getBody();
$data_body = json_decode($body);

header('location:pembeli.php')
?>