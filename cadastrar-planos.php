<?php

use \app\Entity\Planos;

require_once 'app/Entity/Planos.php';


if(isset($_POST['nome_plano'],$_POST['desc_plano'],$_POST['duracao_planos'],$_POST['valor_plano'],$_POST['qnt_aulas'],$_POST['status_plano'])
    && ($_POST['nome'] != null)){
    $obUsuario = new Planos;
    $obUsuario->nome_plano = $_POST['nome_plano'];
    $obUsuario->desc_plano = $_POST['desc_plano'];
    $obUsuario->duracao_plano = $_POST['duracao_plano'];
    $obUsuario->valor_plano = $_POST['valor_plano'];
    $obUsuario->qnt_aulas = $_POST['qnt_aulas'];
    $obUsuario->status_plano = $_POST['status_plano'];
    $obUsuario-> cadastrarPlanos();
    
    
   
} else {
    header('location: realizar-cadastro.php?status=error');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem.php';//alterar!!
include __DIR__.'/includes/footer.php';


//Passos para o dia 19 6 26
//Substituir a listagem do include DIR do cadastrar aluno por outro formulario com os planos! para na hora do cadastro ja unir o cadastro de planos
// ai no final colocar um botao para voltar ao inicio e ter acesso as tabelas






?>