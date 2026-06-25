<?php

use \app\Entity\Treinos;

use \app\Entity\Usuario;

require_once 'app/Entity/Treinos.php';


$obTreinos = new Treinos;
if(isset($_POST['id_usuario'],$_POST['nome_treinos'],$_POST['objetivo'],$_POST['data_treinos'],$_POST['observacoes'] /**deve ver como inserir a chave estrangeira */ )){
    $obTreinos->id_usuario = $_POST['id_usuario'];
    $obTreinos->nome_treinos = $_POST['nome_treinos'];
    $obTreinos->objetivo = $_POST['objetivo'];
    $obTreinos->data_treinos = $_POST['data_treinos'];
    $obTreinos->observacoes = $_POST['observacoes'];
    $obTreinos-> realizarPlano();
    
    
   //PARA QUINTA VER O ERRO DE NAO PUXAR O ID DE PAGAMENTOS!
} else {

}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem-treinos.php';
include __DIR__.'/includes/footer.php';
