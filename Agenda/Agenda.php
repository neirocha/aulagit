<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 11/04/2015
 * Time: 13:49
 */

class Agenda
{
    public $titulo;
    public $compromisso;

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getCompromisso()
    {
        return $this->compromisso;
    }

    /**
     * @param mixed $compromisso
     */
    public function setCompromisso($compromisso)
    {
        $this->compromisso = $compromisso;
    }

}

$obj = new Agenda();
$obj->setTitulo($_POST["titulo"]);
$obj->setCompromisso($_POST["compromisso"]);

echo "<b>Tirulo: </b>".$obj->getTitulo()."<br><b>Compromisso:</b> ".$obj->getCompromisso();