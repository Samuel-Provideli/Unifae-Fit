<?php

use \App\Enitity\usuario;



if(isset($_POST['nome'],$_POST['cpf'],$_POST['data_nasc'])){
    
    $obUsuario = new usuario;
    $obUsuario->nome = $_POST['nome'];
    $obUsuario->cpf = $_POST['cpf'];
    $obUsuario->data_nasc = $_POST['data_nasc'];
    $obUsuario->telefone = $_POST['telefone'];
    $obUsuario->endereco = $_POST['endereco'];
    $obUsuario-> cadastrar();
    
    
    header('location: index.php?status=sucess');
    exit;
}


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/footer.php';








?>