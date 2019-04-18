$(document).ready(function(){

    $('#formCadastro').submit(function(e){
        e.preventDefault();
        form ={
            "nome_usuario" : $('#nome_usuario').val(),
            'senha' : $('#senha').val(),
            'email' : $('#email').val(),
            "nome" : $('#nome').val(),
            "sobrenome" : $('#sobrenome').val(),
            "genero" : $('#genero').val(),
            "dataNascimento" : $('#date').val(),
            "telefone" : $('#fone').val(),
        }
        $.ajax({
            type: "post",
            url: "usuarios/novo",
            data: form,
            success: function(data){
                data = JSON.parse(data);
                if (data.status == 1){
                    $('.alert-danger').show();
                    $('.alert-success').hide();
                }
                else{
                    $('.alert-success').show();
                    $('.alert-danger').hide();
                }
            }
        });

    });

});