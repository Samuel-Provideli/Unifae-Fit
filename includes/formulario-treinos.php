<?php

use \app\Entity\Usuario;
require_once 'app/Entity/Usuario.php';
$usuarios = Usuario::getUsuarios();

?>
<main>

<div class="card borderless" style="width: 30%; margin: 3%;">
			<div class="align-items-center">
				<div class="col-md-12">
					    <div class="card-body">
						<h4 class="f-w-400">Realizar Treinamento</h4>
						<hr> 



    <form action="treinos-realizados.php" method="post">
    
                            <div class="form-group mb-3">
                                <label for="text">Digite o nome do Aluno:</label>
                                <select name="id_usuario"  class="form-control mb-4 mt-2" >
                                <option>Selecione o aluno</option>
                                <?php 

                                foreach($usuarios as $usuario){
                                    echo "<option value='".$usuario->idUsuario."'>".$usuario->nome."</option>";
                                }
                                
                                ?>

                                </select>
                                



                            </div> <!--Nome do plano-->


                            <div class="form-group mb-3">
                                <label for="text">Digite o nome do Treino:</label>
                                <input type="text" name="nome_treinos" class="form-control" id="Username" placeholder="Nome do treino" maxlength="255">
                            </div> <!--Nome do plano-->
    
    
                            <div class="form-group mb-3">
                                <select name="objetivo" required="required" class="form-control mb-4 mt-4" >
                                    <option value="">Escolha o objetivo:</option>
                                    <option value="emagrecer">Emagrecer</option> 
                                    <option value="hipertrofia">Hipertrofia</option>
                                    <option value="condicionamento">Condicionamento</option>
                                    option>
                                </div>
                                </select> 
                            
                            <div class="form-group mb-3">
                                <label for="date">Data de criação:</label>
                                <input type="date" name="data_treinos" class="form-control" placeholder="Data">
                            </div> <!--Data para digitar-->


                            <div class="form-group mb-3">
                                <label for="text">Observações:</label>
                                <input type="text" name="observacoes" class="form-control" placeholder="Breve descrição">
                            </div>  <!--digitar o qnt de aulas-->
                            
                            
                            <button class="btn btn-primary btn-block mb-4" type="submit">Cadastrar Treinamento</button>
                            
                            
                            
                            <hr>    
                        
                            </div> <!--Cpf para digitar-->
                        </div>
                    </div>
                </div>
            </div>
    </form>


</main>