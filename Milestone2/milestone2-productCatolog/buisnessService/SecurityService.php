<?php

class SecurityService{
    private $username = "";
    private $password = "";
    
    function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }
    
    public function authenticate(){
        if($this->password == " " || $this->username == " "){
            return false;
        }
                
        
        
        if($userDataService->findUserByNameandPassword($this->username, $this->password)){
            return true;
        }
        else{
            return false;
        }
    }
}
