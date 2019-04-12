
<?php require('header.php') ?>
<div class="container">
    <h1 class="mb-4">Cadastro</h1>

    <?php  

        echo form_open("usuarios/novo");
        echo form_label("Nome de Usuário", "nome_usuario");
        echo form_input([
            "name" => "nome_usuario",
            "id" =>"nome_usuario",
            "class" => "form-control",
            "maxlength" => 255
        ]);
        echo form_label("Senha", "senha");
        echo form_input([
            "name" => "senha",
            "id" =>"senha",
            "class" => "form-control",
            'type' =>'password',
            "maxlength" => 255
        ]);
        echo form_label("E-mail", "email");
        echo form_input([
            "name" => "email",
            "id" =>"email",
            'type'=>'email',
            "class" => "form-control",
            "maxlength" => 255
        ]);
        
        echo form_label("Nome", "nome");
        echo form_input([
            "name" => "nome",
            "id" =>"nome",
            "class" => "form-control",
            "maxlength" => 255
        ]);
        echo form_label("Sobrenome", "email");
        echo form_input([
            "name" => "sobrenome",
            "id" =>"sobrenome",
            "class" => "form-control",
            "maxlength" => 255,
            "required" => 'true'
        ]);
        echo form_label("Gênero", "senha");
        echo form_input([
            "name" => "genero",
            "id" =>"genero",
            "class" => "form-control",
            "maxlength" => 255,
            "required" => 'true'
        ]);
        echo form_label("Data de Nascimento", "senha");
        echo form_input([
            "name" => "date",
            "id" =>"date",
            "class" => "form-control",
            "maxlength" => 255,
            'type' => 'date',
            "required" => 'true'
        ]);
        echo form_label("telefone", "senha");
        echo form_input([
            "name" => "fone",
            "id" =>"fone",
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