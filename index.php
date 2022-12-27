<?php
$response = array(
    'success' => true,
    'data'    => 1,
    'message' => 'get show data',
);
header('Content-Type: application/json; charset=utf-8');
header('Content-type: application/json');
echo json_encode($response);