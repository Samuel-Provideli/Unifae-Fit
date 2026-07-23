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

if(isset($_POST['nome_plano'],$_POST['desc_plano'],$_POST['duracao_plano'],$_POST['valor_plano'],$_POST['qnt_aulas'],$_POST['status_plano'])){

    
    $obPlanos->nome_plano = $_POST['nome_plano'];
    $obPlanos->desc_plano = $_POST['desc_plano'];
    $obPlanos->duracao_plano = $_POST['duracao_plano'];
    $obPlanos->valor_plano = $_POST['valor_plano'];
    $obPlanos->qnt_aulas = $_POST['qnt_aulas'];
    $obPlanos->status_plano = $_POST['status_plano'];
    $obPlanos-> atualizar();
    
    header('location: lista-planos.php');
    exit;
    
    
   
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario-planos.php';//mudança, pois 
include __DIR__.'/includes/footer.php';


//Erro do else que ao clicar ele nao carregava os dados e ja jogava para o else que manda para o index, sem o else ele pode carregar por completo!


//Para a outra semana ver por que o banco de dados nao esta guardando os dados do banco
//usar var dump ou printr para testar e ver onde esta dando erro!
// 














?>