<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 24/04/2015
 * Time: 12:03
 */

class Compromisso
{

    protected $id;
    protected $data;
    protected $descricao;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

}