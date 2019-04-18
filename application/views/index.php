<?php require('header.php');?>
<div class="container div-log">
    <p class="col-md-5 ml-auto mr-auto ">Entre com seu Usuário e Senha</p>
    <div class="ml-auto mr-auto col-md-5">
        <form action="usuarios/logar" method="POST">
            <input type="text" name="nome" class="form-control mt-3" id="nome" placeholder="Usuário">
            <input type="password" name="senha" class="form-control mt-3" id="senha" placeholder="Senha">
            <button type="submit" class="btn btn-success mt-3">Logar</button>
        </form>
    </div>
</div>