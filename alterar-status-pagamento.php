<?php

use \app\Entity\Pagamento;


require_once 'app/Entity/Pagamentos.php';




if(!isset($_POST['idPagamento']) or !is_numeric($_POST['idPagamento'])){
    header('location: index.php?status=error');
    exit;
}

$obPagamentos = Pagamento::getPagamento($_POST['idPagamento']);

if(!$obPagamentos instanceof Pagamento){
    header('location: index.php?status=error');
    exit;
}

//basicamente um if e else simples como um interruptor, se ta apagado aperta fica acesso, se ja tiver acesso fica apagado

if($obPagamentos->status_pago == 'pendente' || $obPagamentos->status_pago == 'atrasado'){
    $obPagamentos->status_pago = 'pago';
} 
else {
    $obPagamentos->status_pago = 'pendente';
}
    $obPagamentos->atualizar();

header('location: lista-pagamentos.php');
exit;

?>