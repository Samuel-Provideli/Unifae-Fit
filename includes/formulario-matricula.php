<?php

use \app\Entity\Usuario;
use \app\Entity\Planos;

require_once 'app/Entity/Usuario.php';
require_once 'app/Entity/Planos.php';

$usuarios = Usuario::getUsuarios();
$planos = Planos::getPlanos();

?>
<main>

<div class="card borderless" style="width: 30%; margin: 3%;">
			<div class="align-items-center">
				<div class="col-md-12">
					    <div class="card-body">
						<h4 class="f-w-400">Realizar Matricula</h4>
						<hr> 



    <form action="matriculas-realizadas.php" method="post">
    
                            <div class="form-group mb-3">
                                <label for="text">Selecione o Aluno:</label>
                                <select name="id_usuario"  class="form-control mb-4 mt-2" >
                                <option>Selecione o aluno</option>
                                <?php 

                                foreach($usuarios as $usuario){
                                    echo "<option value='".$usuario->idUsuario."'>".$usuario->nome."</option>";
                                }
                                
                                ?>

                                </select>
                                



                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="text">Selecione o Plano:</label>
                                <select name="id_planos"  class="form-control mb-4 mt-2" >
                                <option>Selecione o plano</option>
                                <?php 

                                foreach($planos as $plano){
                                    echo "<option value='".$plano->idPlanos."'>".$plano->nome_plano."</option>";
                                }
                                
                                ?>

                                </select>
   
                            </div>

                            
                            
                            <button class="btn btn-primary btn-block mb-4" type="submit">Cadastrar Matricula</button>
                            
                            
                            
                            <hr>    
                        
                            </div> <!--Cpf para digitar-->
                        </div>
                    </div>
                </div>
            </div>
    </form>


</main>