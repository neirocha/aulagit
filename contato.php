

<div class="container">
    <h1>Contatos</h1>
</div>
<hr>

    <div class="container">



        <div class="row">
<div class="span6">
    <form method="get">
    <table>
        <tr>
            <td valign="top">Nome</td><td><input type="text" name="nome"></td>
        </tr>
        <tr>
            <td valign="top">Email</td><td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td valign="top">Assunto</td><td><input type="text" name="assunto"></td>
        </tr>
        <tr>
            <td valign="top">Mensagem</td><td><textarea cols="55" rows="5" name="mensagem"></textarea> </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Cadastrar" name="cadastrar"> </td>
        </tr>
    </table>

</form>
</div>

    <div class="span6">
    <?php
if ((isset($_GET["cadastrar"]) != "") and ($_GET["nome"] != "")){

   echo "<script LANGUAGE=\"Javascript\">
alert(\"Dados enviados com sucesso, abaixo seguem os dados que você enviou.\");
</SCRIPT>" ;
}
    if((isset($_GET["cadastrar"]) != "") and ($_GET["nome"] == "")){

    echo "<script LANGUAGE=\"Javascript\">
alert(\"Preencha os campos.\");
</SCRIPT>" ;
}

    if((isset($_GET["cadastrar"]) == "Cadastrar") and ($_GET["nome"] != ""))  {
        echo "<h4>Nome = " . $_GET['nome'] . "<br></h4>";
        echo "<h4>Email = " . $_GET['email'] . "<br></h4>";
        echo "<h4>Assunto = " . $_GET['assunto'] . "<br></h4>";
        echo "<h4>Mensagem = " . $_GET['mensagem'] . "</h4>";
    }
     ?>
    </div>
</div>
</div>

