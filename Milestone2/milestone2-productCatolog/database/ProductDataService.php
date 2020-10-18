<?php

require_once 'Database.php';

class ProductDataService{
    
    function findByProductName($n){
        
        $db = new Database();
        
        $stmt = ("SELECT ID, PRODUCTNAME, DISCRIPTION, PRICE FROM PRODUCTS WHERE PRODUCTNAME LIKE '%$n%'");        
        
        $connection = $db->getConnection();
        $result = $connection->query($stmt);
        
        
        if(!$stmt){
            echo "Something is wrong in the binding process. sql error?";
            exit;
        }
        
        if(!$result){
            echo "assume the SQL statement has an error";
            return null;
            exit;            
        }
        
        if($result->num_rows == 0){
            return null;
        }
        
        else{
            $product_array = array();
            
            while($product = $result->fetch_assoc())
            {
                array_push($product_array, $product);
            }
            return $product_array;
        }
    }
    
}