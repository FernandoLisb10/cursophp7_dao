<?php 

class Sql extends PDO{

private $conexao;

public function __construct(){

   $this->conexao = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "123");
}

private function setParams($statment, $parameters = array()){
      
    foreach ($parameters as $key => $value) {
	
      $this->setParam($key, $value);

    }

}

private function setParam($statment, $key, $value){

	$statment->binParam($key, $value);
}

public function query($rawQuery, $params = array()){

     $stmt = $this->conexao->prepare($rawQuery);

     $this->setParams($stmt, $params);

     $this->setParams($stmt, $params);

     $stmt->execute();

     return $stmt;
} 

public function select($rawQuery, $params = array()):array
{
    
    $stmt = $this->query($rawQuery, $params);

    return $stmt->fetchAll(PDO:: FETCH_ASSOC);


}

}

 ?>