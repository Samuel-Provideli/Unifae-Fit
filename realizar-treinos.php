<?php


use \app\Entity\Usuario;


require_once 'app/Entity/Usuario.php';

use \app\Db\Database;
require_once 'app/Db/Database.php';

$usuarios = Usuario::getUsuarios();


include __DIR__.'/includes/header.php';
include __DIR__ .'/includes/formulario-treinos.php';
include __DIR__.'/includes/footer.php';

?>