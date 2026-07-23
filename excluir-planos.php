<?php

use \app\Entity\Planos;


require_once 'app/Entity/Planos.php';



// Configuraçao de ligaçao desativada para a ediçoes ao admnistrador
if(!isset($_GET['idPlanos']) or !is_numeric($_GET['idPlanos'])){
    header('location: index.php?status=error');
    exit;
}


$obPlanos = Planos::getPlano($_GET['idPlanos']);


if(!$obPlanos instanceof Planos){
    header('location: index.php?status=error');
    exit;
}



// Dados Pegos do arquivo cadastrar V

if(isset($_POST['excluir'])){

    $obPlanos-> excluir();
    
    header('location: lista-planos.php');
    exit;
    
    
   
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-excluir-planos.php';//mudança, pois 
include __DIR__.'/includes/footer.php';


//Erro do else que ao clicar ele nao carregava os dados e ja jogava para o else que manda para o index, sem o else ele pode carregar por completo!


//Para a outra semana ver por que o banco de dados nao esta guardando os dados do banco
//usar var dump ou printr para testar e ver onde esta dando erro!
// 














?>