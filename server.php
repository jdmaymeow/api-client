<?php
$data = [
    'SN' => '123456',
    'SERVER' => $_SERVER,
    'REQUEST' => $_REQUEST
    //'POST' => $_POST,
    //'DATA' => json_decode($_POST['data']),
    //'REQUEST' => $_REQUEST,
    //'data' => $_REQUEST['data']


];

echo json_encode($data);
