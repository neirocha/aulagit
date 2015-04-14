<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Cadastro de Clientes</title>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
      <div class="container">
          <h1>Cadastro de Clientes</h1>
        <hr />
        <?php 
            $key = filter_input(INPUT_GET, "detalhe");
            if (is_numeric($key)):
        ?>
        <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <?php 
                        echo $clientes[$key]['nome'] . "  "; 
                        for ($i = 0; $i < $clientes[$key]["rating"]; $i++) {
                            echo "<i class='glyphicon glyphicon-star'></i>";
                        }
                        ?>
                    </h3>
                </div>
                <div class="panel-body">
                    <?php
                    if (isset($clientes[$key]["cnpj"])) {
                        echo "CNPJ: {$clientes[$key]['cnpj']}<br />";
                        echo "Razão Social: {$clientes[$key]['razaoSocial']}<br />";
                    } else {
                        echo "CPF: {$clientes[$key]['cpf']}<br />";
                    }
                    echo "Endereço: {$clientes[$key]['endereco']}<br />";
                    if ($clientes[$key]['endCob']) {
                        echo "<strong>Endereço de Cobrança:</strong> {$clientes[$key]['endCob']}<br />";
                    }
                    echo "Telefone: {$clientes[$key]['telefone']}<br />";
                    ?>
                </div>
            </div>
        <?php
            endif;
        ?>
        <p>
            <a href=?ordem=ASC" class="btn btn-"><i class="glyphicon glyphicon-circle-arrow-up"></i></a>&nbsp;<a href="?ordem=DESC" class="btn btn-"><i class="glyphicon glyphicon-circle-arrow-down"></i></a>
        </p>
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <td>&nbsp;</td>
                    <td>Nome</td>
                    <td>Tipo</td>
                    <td>Classificação</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $ordem = filter_input(INPUT_GET, "ordem") ?: "ASC";
                    foreach($clientes as $key => $cliente): 
                ?>
                <tr>
                    <td><?php echo $key + 1; ?></td>
                    <td><?php echo "<a href='?ordem={$ordem}&detalhe={$key}'>".$cliente["nome"]."</a>"; ?></td>
                    <td><?php echo isset($cliente["cpf"]) ? "Pessoa Física" : "Pessoa Jurídica"; ?></td>
                    <td>
                        <?php 
                        for ($i = 0; $i < $cliente["rating"]; $i++) { 
                            echo "<i class='glyphicon glyphicon-star'></i>";
                        } 
                        ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>        
        <hr />

      </div>

  </body>
</html>