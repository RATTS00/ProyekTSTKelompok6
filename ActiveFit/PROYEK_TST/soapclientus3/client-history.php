<?php
$wsdl = "http://localhost/ActiveFit/PROYEK_TST/usecase3/server.php?wsdl";

try {
    $client = new SoapClient($wsdl);
    $dataMakanan = [
        ['id' => 1, 'nama' => 'Nasi Goreng', 'kalori' => 300],
        ['id' => 2, 'nama' => 'Ayam Bakar', 'kalori' => 250],
        ['id' => 3, 'nama' => 'Soto Ayam', 'kalori' => 200],
    ];

    $response = [
        'status' => 'success',
        'data' => $dataMakanan
    ];
} catch (SoapFault $e) {
    $response = [
        'status' => 'error',
        'message' => $e->getMessage()
    ];
}

header('Content-Type: application/json');
echo json_encode($response);
