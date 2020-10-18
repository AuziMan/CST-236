<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'UserDataService.php';

$u = new UserDataService();

echo "<pre>" . print_r($u->findByFirstName("v"), TRUE) . "</pre>";

//$l = new UserDataService();


echo "<pre>" . print_r($u->findByLastName("d"), TRUE) . "</pre>";

$id = new UserDataService();

echo "<pre>" . print_r($id->findByID(7), TRUE) . "</pre>";

echo "<pre>" . print_r($u->deleteItem("7"), TRUE) . "</pre>";





//echo json_encode($u->findByFirstName("v"));