<?php

require_once "vendor/autoload.php";

use \Wead\DigitalCep\Search;

$CEP = $_POST['cep'];

$busca = new Search;

$resultado = $busca->getAddressFromZipcode($CEP);

print_r($resultado);
