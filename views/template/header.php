<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        }

        #gatologo{
            height: 50px;
        }

        header{
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #c48787;
            padding: 10px;
            gap: 100px;
        }

        nav {
            display: flex;
            gap: 50px;
            font-family: 'Russo One', sans-serif;
        }

        nav a {
            color: #fff;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    <img src="../img/gatologo.png" alt="Logo Gatinho Filhote" id="gatologo">

    <nav>
        <a href="index.php">Início</a>
        <a href="about.php">Sobre</a>
        <a href="views/src/pagLogin.php">Login</a>
    </nav>
</header>

<script>
    document.getElementById("gatologo").addEventListener("click", function() {
        var imagem = document.getElementById("gatologo");
        var imagemAtual = imagem.src.split("/").pop();

        if (imagemAtual === "gatologo.png") {
            imagem.src = "../img/gatologobravo.png";
        } else {
            imagem.src = "../img/gatologo.png";
        }
    });
</script>