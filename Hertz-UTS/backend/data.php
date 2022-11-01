<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once('./helpers.php');


$db_filepath = './db/cars.xml';
if (file_exists($db_filepath)) {
    $xml_string = simplexml_load_file($db_filepath);
    $cars = json_encode($xml_string);
} else {
    exit('Failed to open db file.');
}

echo $cars;