<?php

class Aluno{
    private $id;
    private $nome;
    private $email;
    private $telefone;

    public function __construct($id, $nome, $email, $telefone) {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefone() {
        return $this->telefone;
    }
}

?>