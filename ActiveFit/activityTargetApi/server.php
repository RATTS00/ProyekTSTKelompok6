<?php

session_start();

require_once 'Activity.php';

$activity = new Activity();

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'] ?? '/';

if ($method == 'POST' && $path == '/set-intake') {

    $inputData = json_decode(file_get_contents('php://input'), true);
    if (isset($inputData['calories'])) {

        $response = $activity->setIntake($inputData['calories']);
        echo json_encode(["message" => $response]);
    } else {
        http_response_code(400);
        echo json_encode(["message" => "Data tidak valid. Pastikan Anda mengirimkan 'calories'."]);
    }
} elseif ($method == 'GET' && $path == '/get-activity') {

    $response = $activity->getActivityTarget();
    echo json_encode($response);
} else {
    http_response_code(404);
    echo json_encode(["message" => "Endpoint tidak ditemukan."]);
}
