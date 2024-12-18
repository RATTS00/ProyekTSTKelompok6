<?php

$method = 'POST'; // Tetap gunakan POST
$url = 'http://localhost/ActiveFit/FiteBite-VersionRest/server.php/getKeys'; 

// Body untuk POST
$body = json_encode([
    'jumlah_pembelian' => 12, // Jumlah pembelian
    'user_id' => 'U001',      // ID pengguna
    'nama_user' => 'boty'     
]);

$options = [
    CURLOPT_CUSTOMREQUEST => $method,
    CURLOPT_URL => $url,
    CURLOPT_POSTFIELDS => $body, // Kirim data melalui body
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json' // Header untuk JSON
    ],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false
];

$ch = curl_init();
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
curl_close($ch);

// Output hasilnya
var_dump($result);

?>