<?php

use \app\Entity\Matricula;
require_once 'app/Entity/Matricula.php';

$matricula = Matricula::getMatricula();

$resultado = '';






foreach($matricula as $matriculas){
    if($matriculas->status == 'ativo' && $matriculas->data_term < date("Y-m-d")){
        $matriculas->status = 'vencido';
        $matriculas->atualizar();
    }

    if($matriculas->status == 'ativo'){
        $text = 'Suspender';
        $corBotao = 'btn-warning';
    }
    if($matriculas->status == 'suspensa'){
        $text = 'Ativar';
        $corBotao = 'btn-success';
    }


        $resultado .= '<tr>
                    <td>'.$matriculas->idMatricula.'</td>
                    <td>'.$matriculas->nome.'</td> 
                    <td>'.$matriculas->nome_plano.'</td> 
                    <td>'.$matriculas->valor_plano.'</td> 
                    <td>'.date("d-m-Y", strtotime($matriculas->data_inic)) .'</td> 
                    <td>'.date("d-m-Y", strtotime($matriculas->data_term)) .'</td>
                     <td>'.$matriculas->status.'</td>';

                     
                     if($matriculas->status =='ativo' || $matriculas->status =='suspensa'){
                         
                         $resultado .='<td>
                         <form method="post" action="alterar-status-matricula.php">
                         <input type="hidden" name="idMatricula" value="'.$matriculas->idMatricula.'">
                         <button type="submit" class="btn '.$corBotao.'">'.$text.'</button>
                         </form>
                         </td>';
                         }
                         else{
                             $resultado .= '<td></td>';
                             }


                    if($matriculas->status =='ativo' || $matriculas->status =='suspensa'){
                         
                         $resultado .='<td>
                         <a href="cancelar-matricula.php?idMatricula='.$matriculas->idMatricula.'">
                         <button type="button" class="btn btn-danger">Cancelar</button>
                         </a></td>';
                         }
                         else{
                             $resultado .= '<td></td>';
                             }
                             
                             $resultado .='</tr>';


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
                    <th>Nome do Plano</th>
                    <th>Valor</th>
                    <th>Data de Inicio</th>
                    <th>Data do Termino</th>
                    <th>Status da matricula</th>
                </tr>
            </thead>
            <tbody>
                <?= $resultado ?>
            </tbody>
            
        </table>
        
        
    </main>