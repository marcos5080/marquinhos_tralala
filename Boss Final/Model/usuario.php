<?php

    class Filmes{

        private $nome;
        private $email;
        private $senha;
        private $telefone;
       





     public function getNome(){

        return $this->nome;
         

    }

        public function getEmail(){

        return $this->email;
         

    }

        public function getSenha(){

        return $this->senha;
         

    }

        public function getTelefone(){

        return $this->telefone;
         

    }



    public function setNome($nome):self{

        $this->nome = $nome;
        return $this;


    }

    public function setEmail($email):self{

        $this->email = $email;
        return $this;


    }

    public function setSenha($senha):self{

        $this->senha = $senha;
        return $this;


    }

    public function setTelefone($telefone):self{

        $this->telefone = $telefone;
        return $this;


    } 
    
    }    

?>