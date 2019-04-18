<?php require('header.php');?>
<div class="container mt-5">
    <h1>Dados Cadastrados</h1>
    <div class="mt-5 ">
        <table class="table table-dark">
            <tbody>       
                <tr class="col-md-12">
                    <td class="text-right left">Nome:</td>
                    <td class="right" ><?echo $this->session->userdata('usuario_logado')['nome'];?> <?echo $this->session->userdata('usuario_logado')['sobrenome'];?></td>
                </tr>
                <tr>
                    <td class="text-right left">Data de Nascimento: </td>
                    <td class="right"><?$data= new DateTime($this->session->userdata('usuario_logado')['dataNascimento']);  echo $data->format('d/m/Y');?></td>
                </tr>
                <tr>
                    <td class="text-right left">Telefone: </td>
                    <td class="right"><?echo $this->session->userdata('usuario_logado')['telefone'];?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>