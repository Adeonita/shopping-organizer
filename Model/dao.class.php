<?php
require_once('product.class.php');
require_once('user.class.php');
require_once('test.php');

class Dao{

    public function insert($object){  //Recebe o objeto e as propriedades a serem excedidas na montagem da query
        $exceptions = $object->getExceptions();
        $reflectionClass = new ReflectionClass($object); //Isntancia da reflection class tendo o objeto como parâmetro
        $className = $reflectionClass->getName();  //pega a classe do objeto
        $tableName = $className.'s';   //Coloca o nome da classe no plural
        $classAritributes = $reflectionClass->getProperties();  //Pega todos os atributos da classe
        $getNameAttributes = (array_column($classAritributes, 'name')); //pega apenas os nomes dos atributos
        $properties = array_diff($getNameAttributes, $exceptions);  //Remoção do atributo indesejado 
        $atributes = ""; 
        $values = "";
        foreach($properties as $property){  //Percorre apenas colunas com índice == name
            $atributes = $atributes.$property.", ";  //e guarda esses atributos na variavel atributes, separados por virgula
            $newName = ucfirst($property);   //Deixa a primeira letra de name(atributos) maiúscula
            $values = $values.'"'.$object->{"get".$newName}().'"'. ", ";  //crio uma string que a cada loop corresponde a um método get da classe. ex object->getName(), pegando assim o nome, entre aspas e separados por virgula
        }

        $atributes = substr($atributes, 0, -2);  //Removo os dois últimos caracteres da string atributes, a saber " " e ',' respectivamente
        $values = substr($values, 0, -2);        //Removo os dois últimos caracteres da string atributes, a saber " " e ',' respectivamente

        if($atributes == ''){
            return;
        }     
        $query =  "INSERT INTO {$tableName} ({$atributes}) VALUES ({$values})";  
       
        return $query;
    }

    

}

$dao = new Dao();
$query = $dao->insert(new User('Adeonita','adeonita.sousa@gmail.com', "123testando"));
$pd = $dao->insert(new Product("Sabonete", "Dove", "Higiene", 2,1));
$mt = $dao->insert(new Test("Teste"));

print $query;
print "<br>".$pd;
print "<br>".$mt;