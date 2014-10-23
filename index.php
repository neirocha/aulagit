<?php


ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);

$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$path = str_replace("/","",$rota['path']);

if(($path == "home") or ($path == "contato") or ($path == "empresa") or ($path == "produtos") or ($path == "servicos"))
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

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">


</head>

<body>

<?php require_once("menu.php"); ?>

<div>
 <?php require_once($path.".php"); ?>
</div>



<?php include ("rodape.php"); ?>

</body>
</html>
