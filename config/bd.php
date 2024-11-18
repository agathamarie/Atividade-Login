<?php

class bd {
    const host = 'localhost';
    const banco_de_dados = 'AtividadeLogin';
    const usuario = 'root';
    const senha = '';
    public $conexao;

    public function conectar(){
        $this->conexao = new mysqli(self::host, self::usuario, self::senha, self::banco_de_dados);
        return $this->conexao;
    }
}