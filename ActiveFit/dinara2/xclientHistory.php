<?php

$wsdl = "http://localhost/ActiveFit/dinara2/xDiskon.wsdl";
$client = new SoapClient($wsdl);
$history = $client->getHistory(); 

    header('Content-Type: application/json');
    echo json_encode($history);
