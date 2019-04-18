<?php require('header.php') ?>
<div class="container">
    <h1 class="mb-4">Cadastro</h1>

    <?php  

        echo form_open("cadastrar-produto");
        
        echo form_label("Nome", "nome");
        echo form_input([
            "name" => "nome",
            "id" =>"nome",
            "class" => "form-control",
            "maxlength" => 255
        ]);
        echo form_label("Descrição", "descricao");
        echo form_input([
            "name" => "descricao",
            "id" =>"descricao",
            "class" => "form-control",
            "maxlength" => 255,
            "required" => 'true'
        ]);
        echo form_label("Quantidade", "quantidade");
        echo form_input([
            "name" => "quantidade",
            "id" =>"quantidade",
            "class" => "form-control",
            "maxlength" => 255,
            "required" => 'true'
        ]);
        echo form_label("Preço", "preco");
        echo form_input([
            "name" => "preco",
            "id" =>"preco",
            "class" => "form-control",
            "maxlength" => 255,
            "required" => 'true'
        ]);
        echo form_button([
            "class" => "btn btn-primary mt-4 col-md-3",
            "type" => "submit",
            "content" => "Cadastrar"
        ]);
        echo form_close();
    ?>
</div>