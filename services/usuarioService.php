<?php
require "../../controllers/usuarioController.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';
switch ($acao) {
    case 'cadastrar':
        if (isset($_POST['nome'], $_POST['data_nasc'], $_POST['email'], $_POST['senha'], $_POST['endereco'])) {
        

            $usuarioController = new usuarioController();
            $usuarioController->cadastrar($_POST['nome'], $_POST['data_nasc'], $_POST['email'], $_POST['senha'], $_POST['endereco']);
        }
    default:
        
}
