<?php

use \app\Entity\Usuario;


require_once 'app/Entity/Usuario.php';


if (!isset($_GET['idUsuario']) || !is_numeric($_GET['idUsuario'])) {
    header('location: lista-usuario.php');
    exit;
}
$obUsuario = Usuario::getUsuario($_GET['idUsuario']);



// Dados Pegos do arquivo cadastrar V

if(isset($_POST['telefone'],$_POST['endereco'])){

    $obUsuario->telef = $_POST['telefone'];
    $obUsuario->endereco = $_POST['endereco'];
    $obUsuario-> atualizar();
    
    header('location: lista-usuario.php');
    exit;
    
    
   
}


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario-edt-usuarios.php';//mudança, pois 
include __DIR__.'/includes/footer.php';


//Erro do else que ao clicar ele nao carregava os dados e ja jogava para o else que manda para o index, sem o else ele pode carregar por completo!


//Para a outra semana ver por que o banco de dados nao esta guardando os dados do banco
//usar var dump ou printr para testar e ver onde esta dando erro!
// 




?>