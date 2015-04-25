<?php

require_once __DIR__."/../src/Compromisso.php";

$descricao = filter_input(INPUT_POST, "descricao");
$data = filter_input(INPUT_POST, "data");

$compromisso = null;

if($descricao && $data)
{
    $compromisso = new Compromisso();
    $compromisso->setDescricao($descricao);
    $compromisso->setData(new \DateTime($data));
}
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agenda</title>

        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>
<body>

<?php
if($compromisso)
{
    echo "<p>Descrição: <b>{$compromisso->getDescricao()}</b><br />";
    echo "Data: <b>" . $compromisso->getData()->format("d/m/Y") . "</b></p>";
    echo "<hr>";
}

?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<form action="" method="post">
<fieldset>
    <legend>Agendamento de Compromissos</legend>
    <label>Descrição: <input type="text" name="descricao" required="required"></label><br />
    <label>Data: <input type="date" name="data" required="required"></label><br />
    <input type="submit" value="Agendar">
</fieldset>
</form>

</body>
</html>