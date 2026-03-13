<?php

    class Regioes{

        private $cidade;
        private $estado;
        private $pais;
        private $regioes;






     public function getCidade(){

        return $this->cidade;
         

    }

        public function getEstado(){

        return $this->estado;
         

    }

        public function getPais(){

        return $this->pais;
         

    }

        public function getRegioes(){

        return $this->regioes;
         

    }





    public function setCidade($cidade):self{

        $this->cidade = $cidade;
        return $this;


    }

    public function setEstado($estado):self{

        $this->estado = $estado;
        return $this;


    }

    public function setPais($pais):self{

        $this->pais = $pais;
        return $this;


    }

    public function setRegioes($regioes):self{

        $this->regioes = $regioes;
        return $this;


    }


    
    }    

?>