<?php
require_once('modelBase.php');

class User extends modelBase{

    private $name;
    private $email;
    private $password;
    protected $excepts = ['name'];

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

}


