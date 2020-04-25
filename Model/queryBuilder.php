<?php

class QueryBuilder{

    public function insert($object){  //Recebe o objeto e as propriedades a serem excedidas na montagem da query
        $reflectionClass = new ReflectionClass($object); //Isntancia da reflection class tendo o objeto como parâmetro
        $className = $reflectionClass->getName();  //pega a classe do objeto
        $tableName = $className.'s';   //Coloca o nome da classe no plural
        $classAritributes = $reflectionClass->getProperties();  //Pega todos os atributos da classe
        $getNameAttributes = (array_column($classAritributes, 'name')); //pega apenas os nomes dos atributos
        $excepts = $object->getExcepts();  //trago todas as excessões da classe ou seja, as propriedades que não quero
        $properties = array_diff($getNameAttributes, $excepts);  //Removo-as do array de atributos e guardo apenas as propriedades desejadas
        $atributes = ""; 
        $values = "";
        foreach($properties as $property){  //Percorre apenas colunas com índice == name
            if($property != 'excepts'){  //Except é um atributo da classe então é preciso pegar os atributos que sejam diferentes de excepts
                $atributes = $atributes.$property.", ";  //e guarda esses atributos na variavel atributes, separados por virgula
                $newName = ucfirst($property);   //Deixa a primeira letra de name(atributos) maiúscula
                $values = $values.'"'.$object->{"get".$newName}().'"'. ", ";  //crio uma string que a cada loop corresponde a um método get da classe. ex object->getName(), pegando assim o nome, entre aspas e separados por virgula
            }
        }
        $atributes = substr($atributes, 0, -2);  //Removo os dois últimos caracteres da string atributes, a saber " " e ',' respectivamente
        $values = substr($values, 0, -2);        //Removo os dois últimos caracteres da string atributes, a saber " " e ',' respectivamente
        if(empty($atributes)){
            return;
        }     
        $query =  "INSERT INTO {$tableName} ({$atributes}) VALUES ({$values})";  
       
        return $query;
    }
    

}
