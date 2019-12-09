<?php
require_once('product.class.php');
require_once('user.class.php');

class Dao{

    public function insert($object){

        $reflectionClass = new ReflectionClass($object);
        $className = $reflectionClass->getName();
        $tableName = $className."s";
        $classAritributes = $reflectionClass->getProperties();
        $columnName = (array_column($classAritributes, 'name')); //São as colunas do banco
        $atributes = "";
        foreach($columnName as $name){
            $atributes = $atributes.$name.", ";
        }
        $atributes = substr($atributes, 0, -2);    
        echo "Insert into {$tableName} ({$atributes}) values ()";  
    }

}

$dao = new Dao();
$dao->insert((new User('Adeonita','adeonita.sousa@gmail.com', "123testando")));
