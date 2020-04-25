<?php
require_once('modelBase.php');

class Test extends modelBase{

    private $name;
    protected $excepts = [];

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }
    
    
}

?>

