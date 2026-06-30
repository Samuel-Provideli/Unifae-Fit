<?php

use \app\Entity\Planos;


require_once 'app/Entity/Planos.php';



// Configuraçao de ligaçao desativada para a ediçoes ao admnistrador
$obPlano = Planos::getPlano($_GET['idPlanos']);
print_r($obPlano); exit;



// Dados Pegos do arquivo cadastrar V

$obPlanos = new Planos;
if(isset($_POST['nome_plano'],$_POST['desc_plano'],$_POST['duracao_plano'],$_POST['valor_plano'],$_POST['qnt_aulas'])){
    $obPlanos->nome_plano = $_POST['nome_plano'];
    $obPlanos->desc_plano = $_POST['desc_plano'];
    $obPlanos->duracao_plano = $_POST['duracao_plano'];
    $obPlanos->valor_plano = $_POST['valor_plano'];
    $obPlanos->qnt_aulas = $_POST['qnt_aulas'];
    $obPlanos-> cadastrarPlanos();
    
    
   
} else {
    header('location: cadastrar-planos.php?status=error');
    exit;

}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem-planos.php';//alterar!!
include __DIR__.'/includes/footer.php';


//Para a outra semana ver por que o banco de dados nao esta guardando os dados do banco
//usar var dump ou printr para testar e ver onde esta dando erro!
// 














?>