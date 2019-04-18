<?php require('header.php');?>
<div class="container mt-5">
    <h1>Produtos</h1>
    <table class="table"> 
        <thead class="table-dark">
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
</div>