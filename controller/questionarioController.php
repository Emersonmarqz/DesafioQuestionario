<?php
include_once '../model/questionario.php';
include_once '../model/pergunta.php';
include_once '../model/alternativa.php';
include_once '../database/alternativasDao.php';
include_once '../database/questionariosDao.php';


class QuestionarioController {

    private $alternativaDao;
    private $questionariosDao;

    function __construct() // DATA ACCCESS OBJECT
    {
        $this->alternativaDao = new AlternativasDao();
        $this->questionariosDao = new QuestionariosDao();
    }

    public function criaQuestionario($nome, $descricao) {
        $questionario = new Questionario($nome, $descricao, []);
        $id = $this->questionariosDao->inserirQuestionario($questionario);
        $questionario->setId($id);
        return $questionario;
    }

    public function listaQuestionarios(){
        $questionarios = $this->questionariosDao->listarTodosOsQuestionarios();
        return $questionarios;
    }

    // public function adicionaPergunta ($titulo){
    //     $pergunta = new Pergunta($titulo, "1");
    //     $id = $this->perguntasDao->inserirPergunta($pergunta);
    //     $pergunta->setId($id);
    //     return $pergunta;
    // }

    // public function adicionaAlternativa($nome) {
    //     $alternativa = new Alternativa($nome, "1");
    //     $id = $this->alternativaDao->inserirAlternativa($alternativa);
    //     $alternativa->setId($id);
    //     return $alternativa; 
    // }

    // public function listaQuestionarios(){

    // }

    // public function vizualizaQuestionario(){

    // }
}
?>