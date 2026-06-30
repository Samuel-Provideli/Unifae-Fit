<?php

use \app\Entity\Matricula;
require_once 'app/Entity/Matricula.php';

$matricula = Matricula::getMatricula();

$resultado = '';






foreach($matricula as $matriculas){
        $resultado .= '<tr>
                    <td>'.$matriculas->idMatricula.'</td>
                    <td>'.$matriculas->nome.'</td> 
                    <td>'.$matriculas->nome_plano.'</td> 
                    <td>'.$matriculas->valor_plano.'</td> 
                    <td>'.date("d/m/Y").'</td> 
                    <td>'.date('d/m/Y', strtotime('+' . $matriculas->duracao_plano . ' days')).'</td>


                  
                     <td>'.$matriculas->status.'</td>
           
                    </tr>';


}
            //Para a proxima semana resolver as datas da matricula e apagar todas pois as datas sao relacionadas ao plano, deve se fazer uma conta da data onde se pega a data de hoje multiplica pela duraçao e entrega a data final! organizar e mostrar, a matricula tera apenas 2 coisas selecionar o nome e o plano no formulario, apenas


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