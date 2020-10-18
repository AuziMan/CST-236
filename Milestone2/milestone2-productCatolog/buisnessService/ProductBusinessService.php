<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../Autoloader.php';


class ProductBusinessService 
{
    
    function findByProductName($n) 
    {
        $products = Array();
        
        $dbService = new ProductDataService();
        $products = $dbService->findByProductName($n);
        
        return $products;
    }
}