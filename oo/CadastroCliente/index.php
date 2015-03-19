<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 19/03/2015
 * Time: 10:06
 */

require_once "Cliente.php";

for($i = 0; $i <= 9; $i++)
{
   echo "<a href='?id=$i'>".$clientes[$i][0]."</a><br>";
}

 //var_dump($clientes);


if(isset($_GET['id']))
{
    var_dump($clientes[$_GET['id']]);
}
?>