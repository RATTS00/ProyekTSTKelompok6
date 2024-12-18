<?php
$wsdl = "http://localhost/ActiveFit/PROYEK_TST/usecase3/server.php?wsdl";

try {
    $client = new SoapClient($wsdl);

    $penggunaaanTrackerOlahraga = isset($_POST['trackerUsed']) ? filter_var($_POST['trackerUsed'], FILTER_VALIDATE_BOOLEAN) : false;

    $result = $client->getAkses($penggunaaanTrackerOlahraga);

    $response = [
        'status' => 'success',
        'data' => [
            'status_akses' => $result['status'] ?? 'Unknown',  
            'pesan' => $result['pesan'] ?? 'No message' 
        ]
    ];
} catch (SoapFault $fault) {
    $response = [
        'status' => 'error',
        'message' => $fault->getMessage()  
    ];
}

header('Content-Type: application/json');

echo json_encode($response);
