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
						<h4 class="f-w-400">Cadastrar Pagamento:</h4>
						<hr> 



    <form action="pagamentos-realizados.php" method="post">
    
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
                                <label for="date">Data do pagamento:</label>
                                <input type="date" name="data_pag" class="form-control" placeholder="Data nascimento">
                            </div> <!--Data para digitar-->

                            <div class="form-group mb-3">
                                <label for="date">Data do vencimento:</label>
                                <input type="date" name="data_venc" class="form-control" placeholder="Data nascimento">
                            </div> <!--Data para digitar-->
    
                            
                            
                            <div class="form-group mb-3">
                                <label for="num">Valor do pagamento:</label>
                                <input type="text" id="num" name="valor_pag" maxlength="6" class="form-control" placeholder="Valor" pattern="^[0-9]{1,4}(.[0-9]{1,3})?$"> <!--valor do plano-->
                            </div>


                            <div class="form-group mb-3">
                                <select name="forma_pag" required="required" class="form-control mb-4 mt-4" >
                                    <option value="">Forma de Pagamento:</option>
                                    <option value="dinheiro">Dinheiro</option> 
                                    <option value="pix">Pix</option>
                                    <option value="cartão">Cartão</option>
                                    <option value="boleto">Boleto</option>
                                </div>
                                </select> 
                            
                            
                            <button class="btn btn-primary btn-block mb-4" type="submit">Cadastrar Plano</button>
                            
                            
                            
                            <hr>    
                        
                            </div> <!--Cpf para digitar-->
                        </div>
                    </div>
                </div>
            </div>
    </form>


</main>