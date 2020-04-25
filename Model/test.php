<?php
require_once('modelBase.php');

class Test extends modelBase{

    private $name;
    protected $ex = ['name', 'end', 'etc'];

    public function __construct($name){
        parent::__construct($this->ex);
        $this->name = $name;
        //array_push($this->exceptions, "name", "t", "a");
        //$this->exceptions[] = 'name'; //adiciono a nova exception
       // $this->exc =  array_merge($this->exceptions, $this->ex);
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    
}
 $mt = new Test('t');
 var_dump($mt->getExceptions());

?>

