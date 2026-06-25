<?php

use \app\Entity\Pagamento;
use \app\Entity\Usuario;

require_once 'app/Entity/Pagamentos.php';


$obPagamentos = new Pagamento;
if(isset($_POST['id_usuario'],$_POST['data_venc'],$_POST['data_pag'],$_POST['valor_pag'],$_POST['forma_pag'] /**deve ver como inserir a chave estrangeira */ )){
    $obPagamentos->id_usuario = $_POST['id_usuario'];
    $obPagamentos->data_venc = $_POST['data_venc'];
    $obPagamentos->data_pag = $_POST['data_pag'];
    $obPagamentos->valor_pag = $_POST['valor_pag'];
    $obPagamentos->forma_pag = $_POST['forma_pag'];
    $obPagamentos-> realizarPagamento();
    
    
   //PARA QUINTA VER O ERRO DE NAO PUXAR O ID DE PAGAMENTOS!
} else {

}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem-pagamentos.php';
include __DIR__.'/includes/footer.php';
