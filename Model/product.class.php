<?php

Class Product{
    public $name;
    private $brand;
    private $category; 
    private $price;
    
    //Construtor, é chamado na instancia da classe
    public function __construct($name,$brand, $category, $price /*, $userId */){
        $this->name = $name;
        $this->brand = $brand;
        $this->category = $category;
        $this->price = $price;  
        //$this->userId = $userId;      
    }

    public function getName(){
        return $this->name;
    }

    public function getBrand(){
        return $this->brand;
    }

    public function getCategory(){
        return $this->category;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setBrand($brand){
        $this->brand = $brand;
    }

    public function setCategory($category){
        $this->category = $category;
    }

    public function setPrice($price){
        $this->price = $price;
    }   
}
