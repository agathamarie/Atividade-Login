<?php

class Usuario{
    private $tabela = 'usuario';

    public $id_usuario;
    public $nome;
    public $data_nasc;
    public $email;
    public $senha;
    public $endereco;

    public function __construct(){

    }

    public function cadastrar() {
        return "INSERT INTO {$this->tabela} (nome, data_nasc, email, senha, endereco) VALUES (?, ?, ?, ?, ?);";
    }

    public function selecionar($id_usuario) {
        return "SELECT * FROM {$this->tabela} WHERE id_usuario = ?";
    }
}