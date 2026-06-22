<?php

use \app\Entity\Pagamentos;

require_once 'app/Entity/Pagamentos.php';

$obPagamentos = new Pagamentos;
if(isset($_POST['data_venc'],$_POST['data_pag'],$_POST['valor_pag'],$_POST['forma_pag'],$_POST['status_pag'] /**deve ver como inserir a chave estrangeira */ )){
    $obPagamentos->data_venc = $_POST['data_venc'];
    $obPagamentos->data_pag = $_POST['data_pag'];
    $obPagamentos->valor_pag = $_POST['valor_pag'];
    $obPagamentos->forma_pag = $_POST['forma_pag'];
    $obPagamentos->status_pag = $_POST['status_pag'];
    $obPagamentos-> realizarPagamento();
    
    
   
} else {
    header('location: realizar-pagamentos.php?status=error');
    exit;

}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem-pagamentos.php';
include __DIR__.'/includes/footer.php';
