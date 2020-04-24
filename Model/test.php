<?php
require_once('modelBase.php');

class Test extends modelBase{

    private $name;

    public function __construct($name){
        parent::__construct();
        $this->name = $name;
        $this->exceptions[] = 'name'; //adiciono a nova exception
        
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    
}

?>

