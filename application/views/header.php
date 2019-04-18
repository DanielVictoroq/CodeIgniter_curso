<!doctype html>     
<html>
<head>
    <link rel="stylesheet" href="<?= base_url("/scss/custom.scss")?>">
    <script src="<?= base_url("js/jquery-3.2.1.slim.min.js")?>"></script> 
    <script src="<?= base_url("js/jquery.min.js")?>"></script> 
    <script src="<?= base_url("js/popper.min.js")?>"></script> 
    <script src="<?= base_url("js/bootstrap.min.js")?>"></script> 
    <script src="<?= base_url("js/custom.js")?>"></script> 
    <title>CodeIgniter Projeto</title>
</head>


<?php //var_dump($this->session->has_userdata('admin')); die(); ?>
<?php if($this->session->has_userdata('usuario_logado' )):?>
<header>
    <div class="container-fluid ">
        <div class="container">
            <div class="a">
                <a  href="<?= base_url("/")?>">Home</a>
            </div>    
    
            <div class="dropdown btn-group float-right">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                    <?echo $this->session->userdata('usuario_logado')['nome'];?>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?= base_url("index.php/dados")?>">Dados</a>
                    <?php if($this->session->has_userdata('admin')):?>
                        <a class="dropdown-item" href="<?= base_url("index.php/tela-produto")?>">Cadastrar Produto</a>
                        <a class="dropdown-item" href="<?= base_url("index.php/cadastro")?>">Cadastrar Morador</a>
                    <?endif;?>
                    <a class="dropdown-item" href="<?= base_url("index.php/logout")?>">Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>
<?php endif;?>