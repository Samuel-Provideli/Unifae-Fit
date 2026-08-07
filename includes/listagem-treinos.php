<!DOCTYPE html>
<html lang="en">

<a href="realizar-treinos.php" style="display: inline-block; text-decoration: none; margin: 2% 3%;">
                  <button type="button" class="btn btn-primary"><h4>Realizar Treinamento</h4></button>
                </a>

<?php

use \app\Entity\Treinos;


require_once 'app/Entity/Treinos.php';

$treino = Treinos::getTreinos();

$resultado = '';


foreach($treino as $treinos){
    if($treinos->status_treinos == 'ativo'){
        $text_finl = 'Finalizar Treino';
        $cor_botao = 'btn-success';
    }
    else{
        $text_finl = '';
        $cor_botao = '';
    }
 


    $resultado .='<tr>
                    <td>'.$treinos->idTreinos.'</td>
                    <td>'.$treinos->nome.'</td>
                    <td>'.$treinos->nome_treinos.'</td>
                    <td>'.$treinos->objetivo.'</td>
                    <td>'.date("d/m/Y", strtotime($treinos->data_treinos)).'</td>
                    <td>'.$treinos->observacoes.'</td>
                    <td>'.$treinos->status_treinos.'</td>'; //fechou com virgula aq

                //explicacao: se tiver que inserir uma acao dentro de um grande bloco de uma string vc nunca deve colocar uma açao em meio uma grande string, esses comandos nao sao valores e devem sempre estar fora e nunca concatenado, o if da a mesma ultilizade o botao so aparece e tal afirmaçao for correta e o else garante o resultado na tela se o valor do if for diferente! 

                   if($treinos->status_treinos == 'ativo'){ 
                        $resultado .= '<td>
                        <form method="post" action="alterar-status-treinos.php">
                            <input type="hidden" name="idTreinos" value="'.$treinos->idTreinos.'">
                            <button type="submit" class="btn '.$cor_botao.'">'.$text_finl.'</button>
                        </form>
                    </td>';
                   }
                   else{
                    $resultado .= '<td></td>';
                   }

                    '</tr>'; // e tmb fechou com virgula aq





}

?>

<main>
    
    <section>
        
        </section>
        
        <table class="table bg-light mt-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome do Aluno</th>
                    <th>Nome do Treino</th>
                    <th>Objetivo</th>
                    <th>Data de criação</th>
                    <th>Observações</th>
                    <th>Status do Treino</th>
                    <th>Finalizar Treino</th>
                </tr>
            </thead>
            <tbody>
                <?= $resultado ?>
            </tbody>
            
        </table>
        
        
    </main>