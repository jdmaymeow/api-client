<?php

require_once 'vendor/autoload.php';

use Jdmaymeow\Api;

$api = new Api();

$data = [
    'name' => 'martin',
    'server' => 'test'
];

$api->setData($data);

$api->setProtocol('http');
$api->setMethod('POST');
$api->setHeaders("Accept-language: en\r\nAuth-Key: ".md5(time())."\r\nContent-type: application/x-www-form-urlencoded");
$api->setSocket('http://localhost:1212/server.php');

var_dump($api->go());
