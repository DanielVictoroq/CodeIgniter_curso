<!doctype html>     
<html>
<head>
    <link rel="stylesheet" href="<?= base_url("/css/bootstrap.css")?>">
    <title>CodeIgniter Projeto</title>
</head>
<body>  
    <div class="container">
        <h1>Produtos</h1>
        
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
                <?endforeach;?>
            <?endif;?>
        </table>


        <h1 class="mb-4">Cadastro</h1>

        <?php  
            echo form_open("usuarios/novo");
            echo form_label("Nome", "nome");
            echo form_input([
                "name" => "nome",
                "id" =>"nome",
                "class" => "form-control",
                "maxlength" => 255
            ]);
            echo form_label("E-mail", "email");
            echo form_input([
                "name" => "email",
                "id" =>"email",
                "class" => "form-control",
                "maxlength" => 255,
                "type" => 'email',
                "required" => 'true'
            ]);
            echo form_label("Senha", "senha");
            echo form_input([
                "name" => "senha",
                "id" =>"senha",
                "class" => "form-control",
                "maxlength" => 255,
                "type" => 'password',
                "required" => 'true'
            ]);
            echo form_button([
                "class" => "btn btn-primary mt-4",
                "type" => "submit",
                "content" => "Cadastrar"
            ]);
            echo form_close();

        ?>
    </div>
</body>
</html>