<?php

$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$path = str_replace("/","",$rota['path']);

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
    <?php require_once("home.php"); ?>
</div>



<?php include ("rodape.php"); ?>

</body>
</html>
