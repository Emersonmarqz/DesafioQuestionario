<?php
include_once 'alternativa.php';
    class Pergunta 
    {
        private $id;
        private $titulo;
        private $alternativas;
        private $questionarioId;

        public function __construct($descricao, $alternativas, $respostaCorreta)
        {
            $this->descricao = $descricao;
            $this->alternativas = $alternativas;
            $this->respostaCorreta = $respostaCorreta;
        }  

        public function adicionaAlternativa($alternativa){
            $this->alternativas[] = $alternativa;
        }

        public function removeAlternativa($id){
            foreach($this->alternativas as $$alternativa){
                if($alternativa->id == $id){
                    $index = array_search($alternativa, $this->alternativas);
                    array_slice($this->alternativas, $index, 1);
                }
            }
        }
        
        public function getDescricao() 
        {
            return $this->descricao;          
        }

        public function setDescricao($descricao) 
        {
            $this->descricao = $descricao;
        }

        public function getAlternativas() 
        {
            return $this->alternativas;          
        }

        public function setAlternativas($alternativas)
        {
            $this->alternativas = $alternativas;
        }

        public function getRespostaCorreta ()
        {
            return $this->respostaCorreta;
        }

        public function setRespostaCorreta ($respostaCorreta)
        {
            $this->respostaCorreta = $respostaCorreta;
        }
    }
?>