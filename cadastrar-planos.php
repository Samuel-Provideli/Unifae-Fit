<?php

use \app\Entity\Planos;

require_once 'app/Entity/Planos.php';
require_once 'includes/formulario-planos.php';


$obPlanos = new Planos;
if(isset($_POST['nome_plano'],$_POST['desc_plano'],$_POST['duracao_planos'],$_POST['valor_plano'],$_POST['qnt_aulas'],$_POST[true])){
    $obPlanos->nome_plano = $_POST['nome_plano'];
    $obPlanos->desc_plano = $_POST['desc_plano'];
    $obPlanos->duracao_plano = $_POST['duracao_plano'];
    $obPlanos->valor_plano = $_POST['valor_plano'];
    $obPlanos->qnt_aulas = $_POST['qnt_aulas'];
    $obPlanos->status_plano = $_POST['status_plano'];
    $obPlanos-> cadastrarPlanos();
    
    
   
} else {
    print_r($obPlanos);

}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem-planos.php';//alterar!!
include __DIR__.'/includes/footer.php';


//Para a outra semana ver por que o banco de dados nao esta guardando os dados do banco
//usar var dump ou printr para testar e ver onde esta dando erro!
// 






?>