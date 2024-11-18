<style>
    form{
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    #submit{
        height: 30px;
        width: 150pxpx;
        background-color: #c48787;
        border: none;
        color: white;
    }   
</style>
<form method="post" action="../src/pagLogin.php?acao=logout">
    <button id="submit" type="submit" name="button">Sair</button>
</form>