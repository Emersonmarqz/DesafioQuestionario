<?php 
    class Questionario 
    {
        private $id;
        private $nome;
        private $descricao;
        private $perguntas; 
        
        public function __construct($nome,$descricao, $perguntas)
        {
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->perguntas = $perguntas;
        }

        public function adicionaPergunta($pergunta){
            $this->perguntas[] = $pergunta;
        }

        public function removePergunta($id){
            foreach($this->perguntas as $pergunta){
                if($pergunta->id == $id){
                    $index = array_search($pergunta, $this->perguntas);
                    array_slice($this->perguntas, $index, 1);
                }
            }
        }

        public function getId ()
        {
            return $this->id; 
        }

        public function setId ($id)
        {
            $this->id = $id;
        }

        public function getDescricao ()
        {
            return $this->descricao; 
        }

        public function setDescricao ($descricao)
        {
            $this->descricao = $descricao;
        }

        public function getNome ()
        {
            return $this->nome; 
        }

        public function setNome ($nome)
        {
            $this->nome = $nome;
        }

        public function getPerguntas ()
        {
            return $this->perguntas;
        }

        public function setPerguntas ($perguntas)
        {
            $this->perguntas = $perguntas;
        }
    }    
?>
