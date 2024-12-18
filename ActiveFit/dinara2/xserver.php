<?php
require ('xDiskon.php');
$server = new SoapServer ('xDiskon.wsdl');
$server -> setClass ('Diskon');
$server-> handle();