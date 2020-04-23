<?php
require_once('product.class.php');
require_once('user.class.php');

class Dao{

    public function insert($object){

        $reflectionClass = new ReflectionClass($object); //Isntancia da reflection class tendo o objeto como parâmetro
        $className = $reflectionClass->getName();  //pega a classe do objeto
        $tableName = $className.'s';   //Coloca o nome da classe no plural
        $classAritributes = $reflectionClass->getProperties();  //Pega todos os atributos da classe
        $getNameAttributes = (array_column($classAritributes, 'name')); //pega apenas os nomes dos atributos
        $except = ['name'];  //Atributos a ser removido do insert 
        $properties = array_diff($getNameAttributes, $except);  //Remoção do atributo indesejado 
        $atributes = ""; 
        $values = "";
        foreach($properties as $property){  //Percorre apenas colunas com índice == name
            $atributes = $atributes.$property.", ";  //e guarda esses atributos na variavel atributes, separados por virgula
            $newName = ucfirst($property);   //Deixa a primeira letra de name(atributos) maiúscula
            $values = $values.'"'.$object->{"get".$newName}().'"'. ", ";  //crio uma string que a cada loop corresponde a um método get da classe. ex object->getName(), pegando assim o nome, entre aspas e separados por virgula
        }

        $atributes = substr($atributes, 0, -2);  //Removo os dois últimos caracteres da string atributes, a saber " " e ',' respectivamente
        $values = substr($values, 0, -2);        //Removo os dois últimos caracteres da string atributes, a saber " " e ',' respectivamente

        $query =  "INSERT INTO {$tableName} ({$atributes}) VALUES ({$values})";  
        return $query;
    }

    

}

$dao = new Dao();
$query = $dao->insert((new User('Adeonita','adeonita.sousa@gmail.com', "123testando")));

print $query;