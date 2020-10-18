<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Database{
   
    function getConnection(){
        
    //Credintials for accessing the DB
     $dbservername = "localhost";
     $dbusername = "root";
     $dbpassword = "root";
     $dbname = "eCommerce";
    
   
    //Create Connection
    $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
    
    //Check Connection
    if($conn->connect_error)
    {
        echo "Connection failed: " . $conn->connect_error;
    }
    
    return $conn;
}
}