<?php

class User{

    private $name;
    private $email;
    private $password;
    private $exceptions = ['exceptions','name', 'email'];

    public function __construct($name, $email, $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function getName(){
        return $this->name;
    }

    public function getPassword(){
        return $this->password; 
    }

    public function getEmail(){
        return $this->email;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getExceptions(){
        return $this->exceptions;
    }
    
}


