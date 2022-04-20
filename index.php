<?php

include 'service.php';

$string = $_GET["search"];

$numberOfCountries = getCountries($string);

echo "Número de paises para <strong>".$string. "</strong> es " . $numberOfCountries;