<?php
//Filename: genwsdl.php

require "vendor/autoload.php";
require "AksesSistemAsupanMakan.php";

//initialize generator
$gen = new \PHP2WSDL\PHPClass2WSDL("AksesSistemAsupanMakan", "http://localhost/ActiveFit/PROYEK_TST/usecase3/server.php");

//generate WSDL and write to .wsdl file
$gen->generateWSDL();
file_put_contents("aksesSistemAsupanMakan.wsdl", $gen->dump());
echo "Done!";