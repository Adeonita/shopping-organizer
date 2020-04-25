<?php
require_once('modelBase.php');

class Test extends modelBase{

    private $name;
    private $login;
    private $password;

    protected $excepts = [];

    public function __construct($name, $login, $password){
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getLogin(){
        return $this->login;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }
    
    
}
$mt = new Test('a', 'b', 'c');
var_dump($mt->getExcepts());

?>

