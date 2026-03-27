<?php

    class Filmes{

        private $alugador;
        private $titulo_do_filme;
        private $ano_do_filme;
        private $genero_do_filme;
        private $classificacao_indicativa;
        private $diretor_do_filme;
        private $sinopse;
        private $status_de_alugado;
        
        
    

    

         

        public function getAlugador(){

        return $this->alugador;
         

    }

        public function getTitulo_do_filme(){

        return $this->titulo_do_filme;
         

    }

        public function getAno_do_filme(){

        return $this->ano_do_filme;
         

    }

        public function getGenero_do_filme(){

        return $this->genero_do_filme;
         

    }
     
        public function getClassificacao_indicativa(){

        return $this->classificacao_indicativa;
         

    }
     
        public function getDiretor_do_filme(){

        return $this->diretor_do_filme;
         

    }
     
        public function getSinopse(){

        return $this->sinopse;

        }
         

        public function getStatus_de_alugado(){

        return $this->status_de_alugado;
         

    }







    
        public function setAlugador($alugador):self{

        $this->alugador = $alugador;
        return $this;


    }

    public function setTitulo_do_filme($titulo_do_filme):self{

        $this->titulo_do_filme = $titulo_do_filme;
        return $this;


    }
    
    public function setAno_do_filme($ano_do_filme):self{

        $this->ano_do_filme = $ano_do_filme;
        return $this;


    }

    
    public function setGenero_do_filme($genero_do_filme):self{

        $this->genero_do_filme = $genero_do_filme;
        return $this;


    }

    
    public function setClassificacao_indicativa($classificacao_indicativa):self{

        $this->classificacao_indicativa = $classificacao_indicativa;
        return $this;


    }

    
    public function setDiretor_do_filme($diretor_do_filme):self{

        $this->diretor_do_filme = $diretor_do_filme;
        return $this;


    }

    
    public function setSinopse($sinopse):self{

        $this->sinopse = $sinopse;
        return $this;


    }

    public function setStatus_de_alugado($status_de_alugado):self{

        $this->status_de_alugado = $status_de_alugado;
        return $this;


    }

    
    }    

?>