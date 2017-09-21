<?php
include __DIR__ . '/../vendor/autoload.php';

$client = new \MauroMoreno\DataFactory\Client();
$response = $client->getGuzzleClient()->get('/');

var_dump($response->getBody()->getContents());
