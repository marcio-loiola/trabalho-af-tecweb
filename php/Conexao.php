<?php
class Conexao
{

    private $url;
    private $usuario;
    private $senha;
    private $baseDeDados;


    public function __construct()
    {
        $this->url = "127.0.0.1";
        $this->usuario = "root";
        $this->senha = '';
        $this->baseDeDados = 'flappy_db';
    }

    public function getConexao()
    {
        return new mysqli(
                $this->url,
                $this->usuario,
                $this->senha,
                $this->baseDeDados
        );
    }

    public function connect_error()
    {
        return $this->getConexao()->connect_error;
    }

    public function query($sql)
    {
        return $this->getConexao()->query($sql);
    }

    public function error()
    {
        return $this->getConexao()->error;
    }

    public function close()
    {
        return $this->getConexao()->error;
    }

}

?>