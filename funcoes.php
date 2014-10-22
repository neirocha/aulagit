<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 21/10/2014
 * Time: 10:20
 */

$nome =" Nei Rocha";
$exibe = function ($x) use ($nome) {
    echo $x . $nome . "<br>";
};

$array = [1,2,3,5,6, 8, 90];

array_walk($array, $exibe);





//function somar($x, $y)
//{
//    echo "iniciou a funcao<br>";
//  return $x + $y;
//    echo "parou";
//}
//
//$valor = somar(10, 20);
//
//echo $valor;


?>