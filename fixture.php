<?php

require_once "conexaoDB.php";

echo "### executando Fixture ###\n";

$conn = conexaoDB();

echo "Removedo Tabela\n";

$conn->query("DROP TABLE IF EXISTS teste;");
echo " - OK\n";

echo "criando Tabela\n";

$conn->query("CREATE TABLE teste (
   id INT NOT NULL AUTO_INCREMENT,
   nome VARCHAR(45) CHARACTER SET 'utf8' NULL,
   PRIMARY KEY (id));");
echo " - OK\n";


echo "Inserindo dados\n";
for($x = 0; $x <= 9; $x++){

    $nome = "Teste {$x}";

    $smt = $conn->prepare("INSERT INTO teste (nome) VALUE (:nome);");
    $smt ->bindParam(":nome", $nome);
    $smt ->execute();

}
echo " - OK\n";

echo "### concluido ###\n";

?>