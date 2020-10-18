<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../Autoloader.php';
//require_once 'UserDataService.php';


class UserBusinessService {
    
    function findByFirstNameAddress($n) {
        $persons = Array();
        
        $dbService = new UserDataService();
        $persons = $dbService->findByFirstNameAddress($n);
        
        return $persons;
    }
    
    function findByFirstName($n) {
        $persons = Array();
        
        $dbService = new UserDataService();
        $persons = $dbService->findByFirstName($n);
        
        return $persons;
    }
    
    
    function findByLastName($n){
        
        
        $persons = Array();
        
        $dbService = new UserDataService();
        $persons = $dbService->findByLastName($n);
        
        return $persons;
        
    }
    
    function findByID($id){
        $persons = Array();
        
        $dbService = new UserDataService();
        $dbService->findByID($id);
        
        return $persons;
    }
    
    function deleteItem($id){
        $db = new Database();
        $connection = $db->getConnection();
        $stmt = $connection->prepare("DELETE FROM USERS WHERE ID = ? LIMIT 1");
        
        if(!$stmt){
            echo "Something wrong in binding process. sql error?";
            exit;
        }
        
        $stmt->bind_param("s", $id);
        
        $stmt->execute();
        
        if($stmt->affected_rows > 0){
            return true;
        }
        else{
            return false;
        }
        
    }
    
    
    
}