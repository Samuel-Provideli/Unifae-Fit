<?php

use \app\Entity\Matricula;
use \app\Entity\Usuario;
use \app\Entity\Planos;

require_once 'app/Entity/Matricula.php';

$obMatricula = new Matricula;
if(isset($_POST['id_usuario'],$_POST['id_planos'])){
    $obMatricula->id_usuario = $_POST['id_usuario'];
    $obMatricula->id_planos = $_POST['id_planos'];
    $obMatricula-> realizarMatricula();
    
    
   //PARA QUINTA VER O ERRO DE NAO PUXAR O ID DE PAGAMENTOS!
} else {

}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem-matricula.php';
include __DIR__.'/includes/footer.php';

