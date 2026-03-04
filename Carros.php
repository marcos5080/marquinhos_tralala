<?php

    class Carros{

        private $nome;
        private $marca;
        private $chassi;
        private $rodas;






     public function getNome(){

        return $this->nome;
         

    }

        public function getMarca(){

        return $this->marca;
         

    }

        public function getChassi(){

        return $this->chassi;
         

    }

        public function getRodas(){

        return $this->rodas;
         

    }





    public function setNome($nome):self{

        $this->nome = $nome;
        return $this;


    }

    public function setMarca($marca):self{

        $this->marca = $marca;
        return $this;


    }

    public function setChassi($chassi):self{

        $this->chassi = $chassi;
        return $this;


    }

    public function setRodas($rodas):self{

        $this->rodas = $rodas;
        return $this;


    }


    
    }    

?>