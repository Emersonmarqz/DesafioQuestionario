<?php
include_once 'repositorio.php';
include_once '../model/questionario.php';

class QuestionariosDao {
    private $banco;

	function __construct() {
        $this->banco = new repositorio();
	}

	public function inserirQuestionario(Questionario $questionario){
        $nome = $questionario->getNome();
        $descricao = $questionario->getDescricao();

        $querry = "INSERT INTO `questionarios`(`nome`, `descricao`) VALUES ('".$nome."', '".$descricao."')";

        $resultado = $this->banco->insert($querry);
        return $resultado;
	}

    public function atualizaQuestionario(Questionario $questionario, $id){
        $nome = $questionario->getnome();
        $descricao = $questionario->getnome();
        $querry = "UPDATE `questionarios` SET `nome`='".$nome."',`descricao`='".$descricao."' WHERE id = '".$id."';";
        $resultado = $this->banco->update($querry);

        return $resultado;
    }

	public function deletarQuestionario($idQuestionario){
	    return $resultado = $this->banco->delete("DELETE FROM questionarios WHERE id = ".$idQuestionario);
    }

	public function listarTodosOsQuestionarios(){
        $resultado = $this->banco->select("SELECT * FROM questionarios");
        return $resultado;
    }

	public function listaQuestionario($id){
        $resultado = $this->banco->select("SELECT * FROM questionarios WHERE id = ".$id);
        foreach ($resultado as $linha){
            return $linha;
        }
    }
}
