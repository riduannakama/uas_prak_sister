<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8080',
    'timeout' => 5
]);

$response =  $client->request('POST','/api/pembeli',[
    'json' => [
        'nama' => $_POST['nama'],
        'TTL' => $_POST['TTL'],
        'alamat' => $_POST['alamat'],
        'JK' => $_POST['JK'],
        'umur' => $_POST['umur'],
        'telp' => $_POST['telp'],
    ]
]);

$body = $response->getBody();
header('location:pembeli.php')

?>