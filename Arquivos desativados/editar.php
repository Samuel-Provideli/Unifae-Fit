<?php

use \app\Entity\Usuario;


require_once 'app/Entity/Usuario.php';



// Configuraçao de ligaçao desativada para a ediçoes ao admnistrador
// $obUsuario = Usuario::getUsuario($_GET['idUsuario']);
// print_r($obUsuario);



//Dados Pegos do arquivo cadastrar V

// if(isset($_POST['nome'],$_POST['cpf'],$_POST['data_nasc'],$_POST['telefone'],$_POST['endereco'])
//     && ($_POST['nome'] != null)){
//     $obUsuario = new Usuario;
//     $obUsuario->nome = $_POST['nome'];
//     $obUsuario->cpf = $_POST['cpf'];
//     $obUsuario->data_nasc = $_POST['data_nasc'];
//     $obUsuario->telef = $_POST['telefone'];
//     $obUsuario->endereco = $_POST['endereco'];
//     $obUsuario-> cadastrar();
    
    
//     header('location: index.php?status=success');
//     exit;
// } else {
//     header('location: index.php?status=error');
//     exit;
// }

// include __DIR__.'/includes/header.php';
// // include __DIR__.'/includes/listagem.php';
// include __DIR__.'/includes/footer.php';









?>