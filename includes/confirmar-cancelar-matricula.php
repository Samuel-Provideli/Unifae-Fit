<?php

use \app\Entity\Matricula;


require_once 'app/Entity/Matricula.php';

$obMatricula = Matricula::getMatriculasNome($_GET['idMatricula']);

?>

<main>

<div class="card borderless" style="width: 40%; margin: 3%;">
			<div class="align-items-center">
				<div class="col-md-12">
					    <div class="card-body">
						<h4 class="f-w-400">Cancelar Matricula</h4>
						<hr> 



    <form method="post">
    
                            <div class="form-group mb-3">
                                <label><h4>Deseja Cancelar esta matricula: <?=$obMatricula->nome?></h4></label>
                            </div>
                               

                            <a href="lista-matricula.php">
                                <button  type="button" class="btn btn-success mb-4" style="width: 40%; margin: 3%;">Voltar</button>
                            </a>
                            
                            <button name="cancelar" class="btn btn-danger mb-4" type="submit" style="width: 40%; margin: 3%;">Cancelar</button>
                            
                            
                            
                            <hr>    
                        
                            </div> <!--Cpf para digitar-->
                        </div>
                    </div>
                </div>
            </div>
    </form>


</main>