<?php require('header.php');?>
<div class="container">
    <h1>Produtos <a href="usuarios/logout" class="btn btn-success mt-2" style="float: right;">Logout</a></h1>
    
    <table class="table"> 
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
            </tr>
        </thead>
        <?php if($lista!=null):?>
            <?php foreach($lista as $dado): ?>
            <tbody>
                <tr >
                    <td><?echo $dado['nome'];?></td>
                    <td><?echo $dado['descricao'];?></td>
                    <td><?echo $dado['preco'];?></td>
                </tr>
            </tbody>
            <?php endforeach;?>
        <?php endif;?>
    </table>
    <div class="mt-5">
    <table class="table"> 
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Data de Nascimento</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <tr >
                <td><?echo $this->session->userdata('usuario_logado')['nome'];?></td>
                <td><?echo $this->session->userdata('usuario_logado')['sobrenome'];?></td>
                <td>
                    <?$data= new DateTime($this->session->userdata('usuario_logado')['dataNascimento']);
                      echo $data->format('d/m/Y');?>
                </td>
                <td><?echo $this->session->userdata('usuario_logado')['telefone'];?></td>
            </tr>
        </tbody>
    </table>



    </div>
    
</div>