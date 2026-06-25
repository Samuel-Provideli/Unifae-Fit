<?php

use \app\Entity\Treinos;


require_once 'app/Entity/Treinos.php';

$treino = Treinos::getTreinos();

$resultado = '';


foreach($treino as $treinos){
    $resultado .='<tr>
                    <td>'.$treinos->idTreinos.'</td>
                    <td>'.$treinos->nome.'</td>
                    <td>'.$treinos->nome_treinos.'</td>
                    <td>'.$treinos->objetivo.'</td>
                    <td>'.date("d/m/Y", strtotime($treinos->data_treinos)).'</td>
                    <td>'.$treinos->observacoes.'</td>
                    <td>'.$treinos->status_treinos.'</td>
                    
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
                    <th>Nome do Aluno</th>
                    <th>Nome do Treino</th>
                    <th>Objetivo</th>
                    <th>Data de criação</th>
                    <th>Observações</th>
                    <th>Status do Treino</th>
                </tr>
            </thead>
            <tbody>
                <?= $resultado ?>
            </tbody>
            
        </table>
        
        
    </main>