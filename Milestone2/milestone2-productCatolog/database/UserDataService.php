<?php

require_once 'Database.php';

class UserDataService{
    
    function findByFirstName($n) {
        
        $db = new DataBase();
        
        $connection = $db->getConnection();
        
        $stmt = $connection->prepare( "SELECT USER_ID, FIRST_NAME, LAST_NAME, USER_NAME, PASSWORDS FROM USERS  ");
         
        
        if(!$stmt)
        {
            echo "There is probably a SQL error";
            return null;
            exit;
        }
        
        $like_n = "%" . $n . "%";
        $stmt->bind_param("s", $like_n);
        
        $stmt->execute();
        
        $result = $stmt->get_result();
        
        if(!$result){
            echo "assume the sql has an error";
            return null;
            exit;
        }
        
        if($result->num_rows == 0){
            return null;
        }
        else{
            
            $person_array = array();
            
            while($person = $result->fetch_assoc()){
                
                array_push($person_array, $person);
            }
            return $person_array;
        }
    }
       
    
    function findByLastName($n){
        $db = new DataBase();
        
        $sql_query = "SELECT USER_ID, LAST_NAME FROM USERS WHERE LAST_NAME LIKE '%$n%'";
        
        
        $connection = $db->getConnection();
        $result = $connection->query($sql_query);
        
        if(!$result)
        {
            echo "There is probably a SQL error";
            return null;
            exit;
        }
        
        if($result->num_rows == 0){
            return null;
        }
        else{
            echo "I found " . $result->num_rows . " results!<br>";
            
            $person_array = array();
            
            while($person = $result->fetch_assoc()){
                //print_r($person);
                //echo"<br>";
                
                //echo "First name = " . $person['FIRST_NAME'] . "  || Last Name = " . $person['LAST_NAME'] . "||| User name = " . $person['USER_ID'] . "<br>";
                array_push($person_array, $person);
            }
            return $person_array;
        }
    }
      
    
    function findByID($id){
        
        $id = $id/2;
        $db = new DataBase();
        
        
        
        $sql_query = "SELECT USER_ID, FIRST_NAME, LAST_NAME FROM USERS WHERE USER_ID LIKE '%$id%'";
        
        $connection = $db->getConnection();
        $result = $connection->query($sql_query);
        
        if(!$result)
        {
            echo "There is probably a SQL error";
            return null;
            exit;
        }
        
        if($result->num_rows == 0){
            return null;
        }
        else{
            echo "I found " . $result->num_rows . " results!<br>";
            
            $person_array = array();
            
            while($person = $result->fetch_assoc()){
                //print_r($person);
                //echo"<br>";
                
                //echo "First name = " . $person['FIRST_NAME'] . "  || Last Name = " . $person['LAST_NAME'] . "||| User name = " . $person['USER_ID'] . "<br>";
                array_push($person_array, $person);
            }
            return $person_array;
        }
    }
    
    
    function deleteItem($id){
        $db = new Database();
        $connection = $db->getConnection();
        $stmt = $connection->prepar("DELETE FROM USERS WHERE ID = ? LIMIT 1");
        
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
    
    
    function findByFirstNameAddress($n) {
        
        $db = new DataBase();
        
        $stmt = ( "SELECT USER_ID, FIRST_NAME, LAST_NAME, STREET, CITY, STATE, POSTALCODE
        FROM USERS
        JOIN ADDRESSES
        ON USERS_ID = ADDRESSES.USERS_ID
        WHERE FIRST_NAME LIKE '%$n%'");

        $connection = $db->getConnection();
        
        $result = $connection->query($stmt);
        
                
        
        
        if(!$stmt)
        {
            echo "There is probably a SQL error";
            return null;
            exit;
        }
        
      
        
        if(!$result->num_rows == 0){
            return null;           
        }
        
        else{
            
            $person_array = array();
            
            while($person = $result->fetch_assoc()){
                
            array_push($person_array, $person);
            }
            return $person_array;
        }
    }
}












