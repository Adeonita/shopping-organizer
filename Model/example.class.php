<?php
require_once('modelBase.php');

class Example extends modelBase{

    private $name;
    private $yourExcept;
    protected $excepts = ['yourExcept'];

    public function __construct($name, $yourExcept){
        $this->name = $name;
        $this->yourExcept = $yourExcept;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }
    
    public function getYourExcept(){
        return $this->yourExcept;
    }

    public function setYourExcept($yourExcept){
        $this->yourExcept;
    }
    
}

?>

