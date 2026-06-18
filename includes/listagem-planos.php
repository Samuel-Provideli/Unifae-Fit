<?php

use \app\Entity\Planos;

require_once 'app\Entity\Planos.php';

$plano = Planos::getPlanos();

$resultado = '';

foreach($plano as $planos){
    $resultado .= '<tr>
                    <td>'.$planos->idUsuario.'</td>
                    <td>'.$planos->nome_plano.'</td>
                    <td>'.$planos->desc_plano.'</td>
                    <td>'.$planos->duracao_plano.'</td>
                    <td>'.$planos->valor_plano.'</td>
                    <td>'.$planos->qnt_aulas.'</td>
                    <td>'.$planos->status_plano.'</td>
                    
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
                    <th>Nome do plano</th>
                    <th>Descrição</th>
                    <th>Duração</th>
                    <th>Valor</th>
                    <th>Quantidade de aulas</th>
                    <th>Status do plano</th>
                </tr>
            </thead>
            <tbody>
                <?= $resultado ?>
            </tbody>
            
        </table>
        
        
    </main>