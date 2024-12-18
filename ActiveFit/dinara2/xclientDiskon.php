<?php

$wsdl = "http://localhost/ActiveFit/dinara2/xDiskon.wsdl";
$client = new SoapClient($wsdl);
    $steps = 5000; 
    $diskon = $client->getDiskon($steps);

    header('Content-Type: application/json');
    echo json_encode($diskon);
