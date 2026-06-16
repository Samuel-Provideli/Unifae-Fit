<?php

use \App\Enitity\usuario;

include __DIR__.'/includes/header.php';

include __DIR__.'/includes/formulario.php';

include __DIR__.'/includes/footer.php';

$usuario = usuario::getUsuario();








?>