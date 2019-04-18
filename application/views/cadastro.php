<?php require('header.php') ?>

<div class="container">
    <h1 class="mb-4">Cadastro</h1>
    <div  class="alert alert-success" role="alert">
        Cadastro Efetuado com Sucesso
        </div>
    <div class="alert alert-danger" role="alert">
        Usuário já Cadastrado
    </div>
    <form action="usuarios/novo" method="POST" id="formCadastro">
        <input type="text" name="nome_usuario" id = "nome_usuario" class="form-control" placeholder="Nome de Usuário">
        <input type="password" name="senha" id = "senha" class="form-control"  placeholder="Senha">
        <input type="email" name="email" id = "email" class="form-control" placeholder="E-mail">
        <input type="text" name="nome" id = "nome" class="form-control" placeholder="Nome">
        <input type="text" name="sobrenome" id = "sobrenome" class="form-control" placeholder="Sobrenome">
        <input type="text" name="tipo" id = "tipo" class="form-control" placeholder="Tipo Usuário">
        <input type="date" name="date" id = "date" class="form-control" placeholder="Data de Nascimento">
        <input type="text" name="fone" id = "fone" class="form-control" placeholder="Telefone">
        <button class = "btn btn-primary mt-4 col-md-3" type="submit">Cadastrar</button>
    </form>
</div>
