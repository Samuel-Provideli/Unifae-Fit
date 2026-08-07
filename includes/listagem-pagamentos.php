<!DOCTYPE html>
<html lang="en">

<a href="realizar-pagamentos.php" style="display: inline-block; text-decoration: none; margin: 2% 3%;">
                  <button type="button" class="btn btn-primary"><h4>Realizar Pagamento</h4></button>
                </a>

<?php

use app\Entity\Pagamento;

require_once 'app/Entity/Pagamentos.php';

$pagamento = Pagamento::getPagamentos();

$resultado = '';

                                                //na ordem correta voce invez de colocar o id_(foreikey) voce coloca o nome da coluna que quer puxar o dado para mostrar, no caso foi o nome da pessoa, somente aqui se coloca o dado que quer puxar, porem deve estar de acordo com o dataBase tmb no select feito!

    foreach($pagamento as $pagamentos){

        
                    if($pagamentos->status_pago == 'pendente' && $pagamentos->data_venc < date("Y-m-d")){
                        $pagamentos->status_pago = 'atrasado';
                        $pagamentos->atualizar();
                    }
                    if($pagamentos->status_pago == 'pendente' || $pagamentos->status_pago == 'atrasado'){
                        $textoBotao = 'Marcar Pago';
                        $corBotao = 'btn-success';
                    } 
                    else {
                        $textoBotao = 'Marcar Pendente';
                        $corBotao = 'btn-warning';
                    }




        $resultado .= '<tr>


                    <td>'.$pagamentos->idPagamento.'</td>
                    <td>'.$pagamentos->nome.'</td> 
                    <td>'.date("d/m/Y", strtotime($pagamentos->data_pag)).'</td>
                    <td>'.date("d/m/Y", strtotime($pagamentos->data_venc)).'</td>
                    <td>'.$pagamentos->valor_pag.'</td>
                    <td>'.$pagamentos->forma_pag.'</td>
                    <td>'.$pagamentos->status_pago.'</td>

                    <td>
                        <form method="post" action="alterar-status-pagamento.php">
                            <input type="hidden" name="idPagamento" value="'.$pagamentos->idPagamento.'">
                            <button type="submit" class="btn '.$corBotao.'">'.$textoBotao.'</button>
                        </form>
                    </td>
                    </tr>';
    }
  
?>

<main>
    
    <section>
        
        </section>
        
        <table class="table bg-light mt-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome do aluno</th>
                    <th>Data de pagamentos</th>
                    <th>Data de vencimento</th>
                    <th>Valor a ser pago</th>
                    <th>Forma de pagar</th>
                    <th>Status do pagamento</th>
                    <th>Atividades</th>
                   
                </tr>
            </thead>
            <tbody>
                <?= $resultado ?>
            </tbody>
            
        </table>
        
        
    </main>