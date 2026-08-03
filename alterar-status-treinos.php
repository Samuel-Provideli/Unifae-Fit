<?php

use \app\Entity\Treinos;


require_once 'app/Entity/Treinos.php';


$obTreinos = Treinos::getTreino($_POST['idTreinos']);


if($obTreinos->status_treinos == 'ativo'){

    $obTreinos->status_treinos = 'finalizado';
    
}
    $obTreinos->atualizar();

header('location: lista-treinos.php');
exit;