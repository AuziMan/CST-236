<?php
require_once 'UserDataService.php';

class BuisnessService{
    
    function findByFirstName($n){
        
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
    
    function deleteItem($id) {
        $dbService = new UserDataService();
        
        return $dbService->deleteItem($id);
    }
    
    
    
    
    
    
    
}