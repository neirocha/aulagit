<?php
require_once __DIR__ . "/../carregar.php";
use Database\DataBase;
$db = new DataBase("mysql:host=localhost;charset=utf8", "fase3", "root", "");
$pdo = $db->getConnection();
$pf = $pdo->query("SELECT * FROM PessoaFisica")->fetchAll(\PDO::FETCH_ASSOC);
$pj = $pdo->query("SELECT * FROM PessoaJuridica")->fetchAll(\PDO::FETCH_ASSOC);
$clientes = array_merge($pf, $pj);
$ordem = filter_input(INPUT_GET, "ordem", FILTER_SANITIZE_STRING);
if ($ordem === "DESC") {
    krsort($clientes);
}
require_once __DIR__ . "/../src/Views/index.php";