<?php
include_once 'repositorio.php';
include_once '../model/alternativa.php';

class AlternativasDao {
    private $banco;

	function __construct() {
        $this->banco = new repositorio();
	}

	public function inserirAlternativa(Alternativa $alternativa){
        $nome = $alternativa->getNome();
        $perguntaId = $alternativa->getPerguntaId();

        $querry = "INSERT INTO `alternativas`(`nome`, `pergunta_id`) VALUES ('".$nome."', '".$perguntaId."')";

        $resultado = $this->banco->insert($querry);
        return $resultado;
	}

    public function atualizaAlternativa(Alternativa $alternativa, $id){
        $nome = $alternativa->getNome();
        $perguntaId = $alternativa->getPerguntaId();
        $querry = "UPDATE `alternativas` SET `nome`='".$nome."',`pergunta_id`='".$perguntaId."' WHERE id = '".$id."';";
        $resultado = $this->banco->update($querry);

        return $resultado;
    }

	public function deletarAlternativa($idAlternativa){
	    return $resultado = $this->banco->delete("DELETE FROM alternativas WHERE id = ".$idAlternativa);
    }

	public function listarTodosOsAlternativas(){
        $resultado = $this->banco->select("SELECT * FROM alternativas");
        return $resultado;
    }

	public function listaAlternativa($id){
        $resultado = $this->banco->select("SELECT * FROM alternativas WHERE id = ".$id);
        foreach ($resultado as $linha){
            return $linha;
        }
    }
}
