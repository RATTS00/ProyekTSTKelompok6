<?php

function out($data) {
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

$method = $_SERVER['REQUEST_METHOD'];
$uri = explode("/", $_SERVER['PATH_INFO'] ?? "");
$queryString = $_GET;

$body = file_get_contents("php://input");
$data = json_decode($body, true);

$jumlahPembelian = $queryString['jumlah_pembelian'] ?? ($data['jumlah_pembelian'] ?? null);

if (!$jumlahPembelian || !is_numeric($jumlahPembelian)) {
    http_response_code(400);
    out(["error" => "Jumlah pembelian tidak valid atau tidak ditemukan. Pastikan dikirim melalui query string atau body."]);
}

$userID = $data['user_id'] ?? null;
$namaUser = $data['nama_user'] ?? null;

switch ($method) {
    case 'POST':
        $fun = $uri[1] ?? null;
        if ($fun === 'getKeys') {

            $neededForNextKey = 9 - ($jumlahPembelian % 9);

            $kunci = floor($jumlahPembelian / 9);

            $response = [
                "status" => "success",
                "user_id" => $userID,
                "nama_user" => $namaUser,
                "jumlah_pembelian" => (int) $jumlahPembelian,
                "kunci" => $kunci,
                "needed_for_next_key" => $neededForNextKey,
                "message" => ($namaUser && $userID)
                    ? "$namaUser ($userID) telah mendapatkan $kunci kunci dari $jumlahPembelian pembelian. Anda perlu membeli $neededForNextKey lagi untuk mendapatkan kunci berikutnya."
                    : "Anda telah mendapatkan $kunci kunci dari $jumlahPembelian pembelian. Anda perlu membeli $neededForNextKey lagi untuk mendapatkan kunci berikutnya."
            ];
            out($response);
        }
        break;

    default:
        http_response_code(405);
        out(["error" => "Method not allowed"]);
        break;
}
?>