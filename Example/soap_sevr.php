<?php

require_once('../SoapServers.class.php');
$filePath = "Example.wsdl";
$server = new SoapServers('Example','127.0.0.1');
$server->setFilePath($filePath);
$server->setWsdlContent();
$server->createWsdlFile();
$ss = new SoapServer($filePath);
$ss->setClass('Example');
$ss->handle();