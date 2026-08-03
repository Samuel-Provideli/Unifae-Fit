<?php

use \app\Entity\Matricula;


require_once 'app/Entity/Matricula.php';


$obMatricula = Matricula::getMatriculas($_GET['idMatricula']);

// botao cancelar name=cancelar entra para executar a funçao de troca de status
if(isset($_POST['cancelar'])){
    // a pessoa CONFIRMOU no botão -> troca o status
    if($obMatricula->status == 'ativo' || $obMatricula->status == 'suspensa'){
        $obMatricula->status = 'cancelada';
    }
    $obMatricula->atualizar();

    header('location: lista-matricula.php');
    exit;
}


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-cancelar-matricula.php';//mudança, pois 
include __DIR__.'/includes/footer.php';


//Erro do else que ao clicar ele nao carregava os dados e ja jogava para o else que manda para o index, sem o else ele pode carregar por completo!


//Para a outra semana ver por que o banco de dados nao esta guardando os dados do banco
//usar var dump ou printr para testar e ver onde esta dando erro!
// 














?>