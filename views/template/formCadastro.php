<form method="post" action="../src/pagCadastro.php?acao=cadastrar">
    <label for="nome">Nome: </label>
    <input type="text" name="nome" id="nome"/>

    <label for="data_nasc">Data de nacimento: </label>
    <input type="date" name="data_nasc" id="data_nasc"/>

    <label for="email">Email: </label>
    <input type="email" name="email" id="email"/>

    <label for="endereco">Endereço: </label>
    <input type="text" name="endereco" id="endereco"/>

    <label for="senha">Senha: </label>
    <input type="text" name="senha" id="senha"/>

    <input type="submit" name="acao" value="Enviar">
</form>