<?php


    class Predios{

    private $nome;
    private $altura;
    private $largura;
    private $numero;
    private $quant_residentes;

    public function getNome(){

        return $this->nome;
         

    }

        public function getAltura(){

        return $this->altura;
         

    }

        public function getLargura(){

        return $this->largura;
         

    }

        public function getNumero(){

        return $this->numero;
         

    }

        public function getQuant_residentes(){

        return $this->quant_residentes;
         

    }





    public function setNome($nome):self{

        $this->nome = $nome;
        return $this;


    }

    public function setAltura($altura):self{

        $this->altura = $altura;
        return $this;


    }

    public function setLargura($largura):self{

        $this->largura = $largura;
        return $this;


    }

    public function setNumero($numero):self{

        $this->numero = $numero;
        return $this;


    }

    public function setQuant_residentes($quant_residentes):self{

        $this->quant_residentes = $quant_residentes;
        return $this;


    }

    }
    
?>