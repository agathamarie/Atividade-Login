<?php
require "../../controllers/usuarioController.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';
switch ($acao) {
    case 'cadastrar':
        if (!empty($_POST['nome']) && 
            !empty($_POST['data_nasc']) && 
            !empty($_POST['email']) && 
            !empty($_POST['senha']) && 
            !empty($_POST['endereco'])) {
            try {
                $usuarioController = new usuarioController();
                $usuarioController->cadastrar($_POST['nome'], $_POST['data_nasc'], $_POST['email'], $_POST['senha'], $_POST['endereco']);
                echo "Cadastro realizado com sucesso!";
            } catch (Exception $e) {
                echo "Erro ao cadastrar: " . $e->getMessage();
            }
        }
        else {
            echo "Por favor, preencha todos os campos obrigatórios.";
        }
        break;
    default:
        break;
}