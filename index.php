<?php

// File: index.php
//
// Author: Dior Gardner diorgardner@gmail.com
// version: 0.1
// 2016.02.02

require realpath(dirname(__FILE__)) . '/app.php';

$response = handleRequest(isset($_REQUEST['number'])?$_REQUEST['number']:null);
$responseCode = isset($response['error']) ? 400 : 200;

http_response_code($responseCode);
header('Content-Type: application/json');
echo json_encode($response);
