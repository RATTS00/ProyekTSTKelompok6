<?php

require "vendor/autoload.php";
require "xDiskon.php";

$gen= new \PHP2WSDL\PHPClass2WSDL("Diskon", "http://localhost/wselder/xserver.php");

$gen -> generateWSDL();
file_put_contents ("xDiskon.wsdl", $gen->dump());
echo "Done!";