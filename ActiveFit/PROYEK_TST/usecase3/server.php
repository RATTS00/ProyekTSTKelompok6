<?php
//server.php

require('AksesSistemAsupanMakan.php');
$server = new SoapServer('aksesSistemAsupanMakan.wsdl');
$server->setClass('AksesSistemAsupanMakan');
$server->handle();