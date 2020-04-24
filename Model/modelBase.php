<?php

abstract class modelBase{
    
    protected $exceptions;
    
    public function __construct(){
        $this->exceptions = ['exceptions'];
    }

    public function getExceptions(){
        return $this->exceptions;
    }
    
}


