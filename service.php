<?php


function getCountries($pattern){
    $data = json_decode(file_get_contents('https://restcountries.com/v3.1/name/'.$pattern), true);

    return count($data);

}

