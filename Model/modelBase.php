<?php

abstract class modelBase{
    
    protected $exceptions = ['exceptions'];

    public function __construct($ex){
        $this->exceptions = array_merge($this->exceptions, $this->ex);
    }


    public function getExceptions(){
        return $this->exceptions;
    }   
    
}


