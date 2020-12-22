<?php
include "interfaceRepositorio.php";

class Repositorio implements InterfaceRepositorio{

    private $host;
    private $usuario;
    private $senha;
    private $banco;
    private $conexao;

    function __construct()
    {
        // ### DADOS DO BANCO ###
        $this->host = "localhost";
        $this->usuario = "root";
        $this->senha = "";
        $this->banco = "desafio01";
    }


    private function executarSql($querry)
    {
        $this->conexao = mysqli_connect($this->host, $this->usuario, $this->senha, $this->banco);

        if (mysqli_query($this->conexao, $querry)) {
            mysqli_close($this->conexao);
            return true;
        } else {
            mysqli_close($this->conexao);
            return false;
        }
    }

    public function create($querry){
        return $this->executarSql($querry);
    }

    public function update($querry){
        return $this->executarSql($querry);
    }

    public function insert($querry){
        $this->conexao = new mysqli;
        $this->conexao->connect($this->host, $this->usuario, $this->senha, $this->banco);

        if ($this->conexao->query($querry)) {

            $id = $this->conexao->insert_id;


            $this->conexao->close();

            return $id;
        } else {
            $this->conexao->close();

            return false;
        }
    }

    public function delete($querry){
        return $this->executarSql($querry);
    }

    public function select($querry){
        $conexao = new mysqli($this->getHost(), $this->getUsuario(), $this->getSenha(), $this->getBanco());

        if ($conexao->connect_error) {
            echo "Erro na conexão: " . $conexao->connect_error;
            $conexao->close();
            return false;
        }

        $resultado = $conexao->query($querry);
        try {
            if ($resultado->num_rows > 0) {
                // output data of each row
                while ($row = $resultado->fetch_assoc()) {
                    $linhas[] = $row;

                }
                $conexao->close();
                return $linhas;
            } else {
                echo "Nenhum resultado encontrado!";
                $conexao->close();
                return false;
            }
        } catch (Exception $exception){

        }
    }

    public function getHost()
    {
        return $this->host;
    }

    public function setHost($host)
    {
        $this->host = $host;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getBanco()
    {
        return $this->banco;
    }

    public function setBanco($banco)
    {
        $this->banco = $banco;
    }

    public function getConexao()
    {
        return $this->conexao;
    }

    public function setConexao($conexao)
    {
        $this->conexao = $conexao;
    }
}