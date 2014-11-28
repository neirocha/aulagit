<?php

session_start();
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);

$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$path = basename($rota['path']);


if(($path == "home") or ($path == "Home") or ($path == "HOME") or ($path == "contato") or ($path == "Contato") or ($path == "CONTATO") or ($path == "empresa") or ($path == "Empresa") or ($path == "EMPRESA") or ($path == "produtos") or ($path == "Produtos") or ($path == "PRODUTOS") or ($path == "servicos") or ($path == "Servicos") or ($path == "SERVICOS"))
{

}else{

   echo "<br><br><h1 align='center'>STATUS CODE 404</h1><h4 align='center'>Pagina não encontrada!</h4>";

    echo '<center><a href="JavaScript: window.history.back();">Voltar</a></center>';
    exit;
}



?>

<html>
<head>
    <meta charset="utf-8">
    <title>Aula de PHP</title>

    <link rel="stylesheet" type="text/css" href="/css/stylos.css">


</head>




<?php






if(isset($_REQUEST['link'])){

$path = $_GET['link'];



if(!isset($path)){

	
	}
}


$_SESSION['link'] = $path;

if(($path == "home") or ($path == "Home") or ($path == "HOME") or ($path == "contato") or ($path == "Contato") or ($path == "CONTATO") or ($path == "empresa") or ($path == "Empresa") or ($path == "EMPRESA") or ($path == "produtos") or ($path == "Produtos") or ($path == "PRODUTOS") or ($path == "servicos") or ($path == "Servicos") or ($path == "SERVICOS"))
{
}else{

    echo "<br><br><h1 align='center'>STATUS CODE 404</h1><h4 align='center'>Pagina não encontrada!</h4>";

    echo '<center><a href="JavaScript: window.history.back();">Voltar</a></center>';
    

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
