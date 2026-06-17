<?php

use \App\Enitity\Usuario;

include __DIR__.'/includes/header.php';

if(isset($_GET['status']) && $_GET['status'] == 'success'){
    include __DIR__.'/includes/listagem.php';
}else{
    include __DIR__.'/includes/formulario.php';
}

include __DIR__.'/includes/footer.php';



?>