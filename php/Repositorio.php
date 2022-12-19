<?php

include "php/Conexao.php";

class Repositorio{
    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function getConexao() {
        return $this->conexao->getConexao();
    }
}




?>

