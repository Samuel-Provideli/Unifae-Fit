<?php

use \app\Entity\Usuario;
use \app\Entity\Planos;

require_once 'app/Entity/Usuario.php';
require_once 'app/Entity/Planos.php';

use \app\Db\Database;
require_once 'app/Db/Database.php';

$usuarios = Usuario::getUsuarios();
$planos = Planos::getPlanos();


include __DIR__.'/includes/header.php';
include __DIR__ .'/includes/formulario-matricula.php';
include __DIR__.'/includes/footer.php';

?>