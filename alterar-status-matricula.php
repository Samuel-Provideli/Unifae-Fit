<?php

use \app\Entity\Matricula;

require_once 'app/Entity/Matricula.php';

$obMatricula = Matricula::getMatriculas($_POST['idMatricula']);

if($obMatricula->status == 'ativo'){
    $obMatricula->status = 'suspensa';

}elseif($obMatricula->status == 'suspensa'){
    $obMatricula->status = 'ativo';
    }
    
    $obMatricula->atualizar();

header('location: lista-matricula.php');
exit;











?>