<?php

session_start();
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);

$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

//$path = str_replace("/","",$rota['path']);

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Aula de PHP</title>

    <link rel="stylesheet" type="text/css" href="/css/stylos.css">


</head>




<?php


$path = basename($rota['path']);



if(isset($_REQUEST['link'])){

$path = $_GET['link'];



if(!isset($path)){}
}



$_SESSION['link'] = $path;

if(($path == "home") or ($path == "contato") or ($path == "empresa") or ($path == "produtos") or ($path == "servicos"))
{
}else{

    require_once("menu.php");

    include ("rodape.php");

    exit;
}

?>

<body>

<?php require_once("menu.php"); ?>

<div id="pagina">
    <?php require_once($path.".php"); ?>
</div>



<?php include ("rodape.php"); ?>

</body>
</html>
