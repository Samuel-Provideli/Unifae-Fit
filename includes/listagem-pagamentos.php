<?php

use app\Entity\Pagamentos;
use \app\Entity\Planos;

require_once 'app\Entity\Planos.php';

$pagamento = Pagamentos::getPagamentos();

$resultado = '';

    foreach($pagamento as $pagamentos){
        $resultado .= '<tr>
                    <td>'.$pagamentos->idPagamentos.'</td>
                    <td>'.$pagamentos->data_venc.'</td>
                    <td>'.$pagamentos->data_pag.'</td>
                    <td>'.$pagamentos->valor_pag.'</td>
                    <td>'.$pagamentos->forma_pag.'</td>
                    <td>'.$pagamentos->status_pag.'</td>
                    
                    </tr>';
    }
    //PARA AMANHA VERIFICAR LIGACOES E TERMINAR A CONEXAO JUNTO COM O FORMULARIO DE PAGAMENTOS E TESTAR COM O BANCO DE DADOS, CUIDADO COM ERROS DE DIGITACOES E LETRAS DIFERENTES!!

?>

<main>
    
    <section>
        
        </section>
        
        <table class="table bg-light mt-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data de vencimento</th>
                    <th>Data de pagamentos</th>
                    <th>Valor a ser pago</th>
                    <th>Forma de pagar</th>
                    <th>Status do pagamento</th>
                </tr>
            </thead>
            <tbody>
                <?= $resultado ?>
            </tbody>
            
        </table>
        
        
    </main>