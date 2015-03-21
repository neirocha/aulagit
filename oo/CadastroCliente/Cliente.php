<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 19/03/2015
 * Time: 09:25
 */

class Cliente
{
    public $nome;
    public $cpf;
    public $endereco;
    public $telefone;

}

$cliente0	= new Cliente();
$cliente0	->nome=	"Nei Rocha";
$cliente0	->cpf=	"012.345.678-90";
$cliente0	->endereco=	"Rua de cima";
$cliente0	->telefone=	"71 7527-5345";

$cliente1	= new Cliente();
$cliente1	->nome=	"Antonio";
$cliente1	->cpf=	"025.658.236-65";
$cliente1	->endereco=	"Rua de dentro";
$cliente1	->telefone=	"71 4586-6445";

$cliente2	= new Cliente();
$cliente2	->nome=	"Carlos";
$cliente2	->cpf=	"965.865.745-65";
$cliente2	->endereco=	"Rua de baixo";
$cliente2	->telefone=	"71 7789-6352";

$cliente3	= new Cliente();
$cliente3	->nome=	"Manoel";
$cliente3	->cpf=	"695.352.896-68";
$cliente3	->endereco=	"Rua de tras";
$cliente3	->telefone=	"71 3359-8545";

$cliente4	= new Cliente();
$cliente4	->nome=	"Lucas";
$cliente4	->cpf=	"032.653.956-85";
$cliente4	->endereco=	"Rua amarela";
$cliente4	->telefone=	"71 3253-8532";

$cliente5	= new Cliente();
$cliente5	->nome=	"Maria";
$cliente5	->cpf=	"415.365.896-96";
$cliente5	->endereco=	"Rua verde";
$cliente5	->telefone=	"71 3323-9659";

$cliente6	= new Cliente();
$cliente6	->nome=	"Joana";
$cliente6	->cpf=	"896.587.630-96";
$cliente6	->endereco=	"Rua santa luiza";
$cliente6	->telefone=	"71 3393-5555";

$cliente7	= new Cliente();
$cliente7	->nome=	"Dilma";
$cliente7	->cpf=	"896.587.630-96";
$cliente7	->endereco=	"Rua santa maria";
$cliente7	->telefone=	"71 3393-5353";

$cliente8	= new Cliente();
$cliente8	->nome=	"Rafaela";
$cliente8	->cpf=	"896.587.630-96";
$cliente8	->endereco=	"Rua santa cecilia";
$cliente8	->telefone=	"71 2356-5358";

$cliente9	= new Cliente();
$cliente9	->nome=	"Natali";
$cliente9	->cpf=	"012.345.678.-90";
$cliente9	->endereco=	"Rua amargosa";
$cliente9	->telefone=	"71 3358-6523";
/*
$cli0 = array(0 => $cliente0->nome, 1 => $cliente0->cpf, 2 => $cliente0->endereco,3  => $cliente0->telefone);
$cli1 = array(0 => $cliente1->nome, 1 => $cliente1->cpf, 2 => $cliente1->endereco,3  => $cliente1->telefone);
$cli2 = array(0 => $cliente2->nome, 1 => $cliente2->cpf, 2 => $cliente2->endereco,3  => $cliente2->telefone);
$cli3 = array(0 => $cliente3->nome, 1 => $cliente3->cpf, 2 => $cliente3->endereco,3  => $cliente3->telefone);
$cli4 = array(0 => $cliente4->nome, 1 => $cliente4->cpf, 2 => $cliente4->endereco,3  => $cliente4->telefone);
$cli5 = array(0 => $cliente5->nome, 1 => $cliente5->cpf, 2 => $cliente5->endereco,3  => $cliente5->telefone);
$cli6 = array(0 => $cliente6->nome, 1 => $cliente6->cpf, 2 => $cliente6->endereco,3  => $cliente6->telefone);
$cli7 = array(0 => $cliente7->nome, 1 => $cliente7->cpf, 2 => $cliente7->endereco,3  => $cliente7->telefone);
$cli8 = array(0 => $cliente8->nome, 1 => $cliente8->cpf, 2 => $cliente8->endereco,3  => $cliente8->telefone);
$cli9 = array(0 => $cliente9->nome, 1 => $cliente9->cpf, 2 => $cliente9->endereco,3  => $cliente9->telefone);
*/
//$clientes = array($cli0, $cli1, $cli2, $cli3, $cli4, $cli5, $cli6, $cli7, $cli8, $cli9);

$clientes = array($cliente0, $cliente1, $cliente2, $cliente3, $cliente4, $cliente5, $cliente6, $cliente7, $cliente8, $cliente9);


echo "<a href='?order=arsort'>ascendente</a> / <a href='?order=asort'>descendente</a><br><br>";


if(isset($_GET['order']))
{


    $_GET['order']($clientes);//decrescente
}


//asort($clientes);//crescente
$conta = -1;
foreach($clientes as $cliente) {
$conta++;
    echo "<a href='?id=$conta'>" . $cliente->nome . "</a><br>";

}

if(isset($_GET['id']))
{
    var_dump($clientes[$_GET['id']]);
}
?>

