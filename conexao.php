<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 21/10/2014
 * Time: 11:21
 */

try{
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo", "root","1234");
}

catch(\PDOException $e){
    die("Erro Codigo: ".$e->getCode().": ".$e->getMessage());
}

$sql = "select * from clientes";
$stmt = $conexao->prepare($sql);
$stmt->execute();
//$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
//print_r($res);

foreach($clientes as $cliente)
{
    $cliente['nome']." - ".$cliente['email']."<br>";
}



?>