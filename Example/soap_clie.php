<?php
$client = new SoapClient('http://127.0.0.1/soap/Example/Example.wsdl');
print_r($client->__getFunctions());
echo "<br/>";
echo $client->sayHello('Avril Lavigne');
echo "<br/>";
echo $client->add(9,8);