<?php
    date_default_timezone_set('UTC');
    $now = new DateTime;
    $now = $now->format("Y-m-d H:i:s T");

    header('Content-Type: application/json; charset=utf8');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

    echo json_encode($now);
?>
