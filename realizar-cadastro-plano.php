<?php


//Erro resolvido, foi necessario adicionar a variavel criada aqui para que o formulario nao de erro de indefiniçao pois aqui entra o codg do formulario e nao no cadastrar pois la quem entra é a listagem! Erro corrigido e importande de se ficar atento!


use \app\Entity\Planos;

require_once 'app/Entity/Planos.php';


$obPlanos = new Planos;



include __DIR__.'/includes/header.php';
include __DIR__ .'/includes/formulario-planos.php';
include __DIR__.'/includes/footer.php';

?>