<link rel="stylesheet" type="text/css" href="../css/pagCadastro.css">
<form method="post" action="../src/pagCadastro.php?acao=cadastrar" id="formcadastro">
    <input type="text" name="nome" id="nome" placeholder="Nome: "/>

    <input type="date" name="data_nasc" id="data_nasc" placeholder="Data de Nascimento: "/>

    <input type="email" name="email" id="email" placeholder="Email: "/>

    <input type="text" name="endereco" id="endereco" placeholder="Endereço: "/>

    <input type="text" name="senha" id="senha" placeholder="Senha: "/>

    <input type="submit" name="acao" id="submit" value="Enviar">
</form>

<p>Já tem Cadastro?
    <a href="../src/pagLogin.php">Faça Login!</a>
</p>