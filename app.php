<?php

require_once "vendor/autoload.php";
require "src/Search.php";

use willGragam\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode("52121200");

print_r($resultado);
