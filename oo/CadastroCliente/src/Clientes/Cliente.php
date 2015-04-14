<?php
namespace Clientes;

abstract class Cliente
{

    protected $id;
    

    protected $nome;
 
    protected $endereco;
    
     protected $telefone;
    
    protected $rating = 0;

    protected $endCobranca;

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function getEndCobranca()
    {
        return $this->endCobranca;
    }

    public function setId($id)
    {
        $this->id = $id;
        
        return $this;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        
        return $this;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        
        return $this;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        
        return $this;
    }

    public function setRating($rating)
    {
        if (!is_integer($rating)) {
            $rating = 0;
        }        
        $this->rating = $rating > 5 ? 5 : $rating < 0 ? 0 : $rating;
        
        return $this;
    }

    public function setEndCobranca($endCobranca)
    {
        $this->endCobranca = $endCobranca;
        
        return $this;
    }

    public function hasEndCobranca() {
        return $this->endCobranca !== null;
    }            
}