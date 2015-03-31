<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 19/03/2015
 * Time: 10:06
 */

require_once "Cliente.php";
require_once "ClienteJuridico.php";

$cliente0	= new Cliente();
$cliente0	->nome=	"Nei Rocha";
$cliente0	->tipoPessoa= "Pessoa Fisica";
$cliente0	->cpf=	"012.345.678-90";
$cliente0	->endereco=	"Rua de cima";
$cliente0	->telefone=	"71 7527-5345";

$cliente1	= new Cliente();
$cliente1	->nome=	"Antonio";
$cliente1	->tipoPessoa= "Pessoa Juridica";
$cliente1	->cpf=	"025.658.236-65";
$cliente1	->endereco=	"Rua de dentro";
$cliente1	->telefone=	"71 4586-6445";
$cliente1	->cnpj=	"08.606.420/0001-28";
$cliente1	->enderecoCobranca=	"Rua de cobranca";

$cliente2	= new Cliente();
$cliente2	->nome=	"Carlos";
$cliente2	->tipoPessoa= "Pessoa Fisica";
$cliente2	->cpf=	"965.865.745-65";
$cliente2	->endereco=	"Rua de baixo";
$cliente2	->telefone=	"71 7789-6352";

$cliente3	= new Cliente();
$cliente3	->nome=	"Manoel";
$cliente3	->tipoPessoa= "Pessoa Fisica";
$cliente3	->cpf=	"695.352.896-68";
$cliente3	->endereco=	"Rua de tras";
$cliente3	->telefone=	"71 3359-8545";

$cliente4	= new Cliente();
$cliente4	->nome=	"Lucas";
$cliente4	->tipoPessoa= "Pessoa Fisica";
$cliente4	->cpf=	"032.653.956-85";
$cliente4	->endereco=	"Rua amarela";
$cliente4	->telefone=	"71 3253-8532";

$cliente5	= new Cliente();
$cliente5	->nome=	"Maria";
$cliente5	->tipoPessoa= "Pessoa Juridica";
$cliente5	->cpf=	"415.365.896-96";
$cliente5	->endereco=	"Rua verde";
$cliente5	->telefone=	"71 3323-9659";
$cliente5	->cnpj=	"08.606.420/0001-28";
$cliente5	->enderecoCobranca=	"Rua de cobranca 2";

$cliente6	= new Cliente();
$cliente6	->nome=	"Joana";
$cliente6	->tipoPessoa= "Pessoa Fisica";
$cliente6	->cpf=	"896.587.630-96";
$cliente6	->endereco=	"Rua santa luiza";
$cliente6	->telefone=	"71 3393-5555";

$cliente7	= new Cliente();
$cliente7	->nome=	"Dilma";
$cliente7	->tipoPessoa= "Pessoa Fisica";
$cliente7	->cpf=	"896.587.630-96";
$cliente7	->endereco=	"Rua santa maria";
$cliente7	->telefone=	"71 3393-5353";

$cliente8	= new Cliente();
$cliente8	->nome=	"Rafaela";
$cliente8	->tipoPessoa= "Pessoa Fisica";
$cliente8	->cpf=	"896.587.630-96";
$cliente8	->endereco=	"Rua santa cecilia";
$cliente8	->telefone=	"71 2356-5358";

$cliente9	= new Cliente();
$cliente9	->nome=	"Natali";
$cliente9	->tipoPessoa= "Pessoa Fisica";
$cliente9	->cpf=	"012.345.678.-90";
$cliente9	->endereco=	"Rua amargosa";
$cliente9	->telefone=	"71 3358-6523";


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
    echo "<a href='?id=$conta'>" .$cliente->nome . "</a><br>";

}

if(isset($_GET['id']))
{
    var_dump($clientes[$_GET['id']]);
}
?>