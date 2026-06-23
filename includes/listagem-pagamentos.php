<?php

use app\Entity\Pagamento;

require_once 'app/Entity/Pagamentos.php';

$pagamento = Pagamento::getPagamentos();

$resultado = '';

                                                //na ordem correta voce invez de colocar o id_(foreikey) voce coloca o nome da coluna que quer puxar o dado para mostrar, no caso foi o nome da pessoa, somente aqui se coloca o dado que quer puxar, porem deve estar de acordo com o dataBase tmb no select feito!

    foreach($pagamento as $pagamentos){
        $resultado .= '<tr>
                    <td>'.$pagamentos->idPagamentos.'</td>
                    <td>'.$pagamentos->nome.'</td> 
                    <td>'.$pagamentos->data_venc.'</td>
                    <td>'.$pagamentos->data_pag.'</td>
                    <td>'.$pagamentos->valor_pag.'</td>
                    <td>'.$pagamentos->forma_pag.'</td>
                    <td>'.$pagamentos->status_pago.'</td>
                
                    
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
                    <th>Nome do aluno</th>
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