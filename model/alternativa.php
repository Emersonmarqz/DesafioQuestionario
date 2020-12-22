<?php 
    class Alternativa 
    {
        private $id;
        private $nome;
        private $perguntaId;

        public function __construct($nome, $perguntaId)
        {
            $this->nome = $nome;
            $this->perguntaId = $perguntaId;

        }

        public function getId() 
        {
            return $this->id;          
        }

        public function setId($id)
        {
            $this->id = $id;
        }
        
        public function getNome() 
        {
            return $this->nome;          
        }

        public function setNome($nome) 
        {
            $this->nome = $nome;
        }

        public function getPerguntaId() 
        {
            return $this->perguntaId;          
        }

        public function setPerguntaId($perguntaId)
        {
            $this->perguntaId = $perguntaId;
        }
    }
?>