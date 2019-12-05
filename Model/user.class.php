<?php

Class User{

    private $name;
    private $email;
    private $password;

    public function __construct($name, $password){
        $this->name = $name;
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
}