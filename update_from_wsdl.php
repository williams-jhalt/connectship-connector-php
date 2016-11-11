<?php

require 'vendor/autoload.php';

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
    new \Wsdl2PhpGenerator\Config(array(
        'inputFile' => 'http://wt-cs/amp/wsdl',
        'outputDir' => './src',
        'namespaceName' => 'Williams\ConnectShip'
    ))
);