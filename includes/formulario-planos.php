<main>

<div class="card borderless" style="width: 30%; margin: 3%;">
			<div class="align-items-center">
				<div class="col-md-12">
					    <div class="card-body">
						<h4 class="f-w-400">Cadastrar Plano</h4>
						<hr> 



    <form action="cadastrar-planos.php" method="post">
    
                            <div class="form-group mb-3">
                                <label for="text">Digite o nome do novo Plano:</label>
                                <input type="text" name="nome_plano" class="form-control" id="Username" placeholder="Nome do plano" maxlength="150">
                            </div> <!--Nome do plano-->


                            <div class="form-group mb-3">
                                <label for="text">Digite uma breve descrição do plano:</label>
                                <input type="text" name="desc_plano" class="form-control" id="Username" placeholder="Descrição" maxlength="255">
                            </div> <!--Nome do plano-->
    
    
                            
                            <div class="form-group mb-3">
                                <label for="date">Inicio do Plano:</label>
                                <input type="date" name="duracao_plano" class="form-control" placeholder="Duração">
                            </div> <!--Data para digitar-->
                            
                            
                            <div class="form-group mb-3">
                                <label for="num">Valor do Plano</label>
                                <input type="text" id="num" name="valor_plano" maxlength="10" class="form-control" placeholder="Valor" pattern="^[0-9]{1,4}(,[0-9]{1,3})?$"> <!--valor do plano-->
                            </div>


                            <div class="form-group mb-3">
                                <label for="num">Quantidade de Aulas</label>
                                <input type="text" id="num" name="qnt_aulas" maxlength="5" class="form-control" placeholder="Quantidade de aulas" pattern="(?:\d\s*){1,5}" title="Formato esperado: 12345">
                            </div>  <!--digitar o qnt de aulas-->
                            
                            
                            <button class="btn btn-primary btn-block mb-4" type="submit">Cadastrar Plano</button>
                            
                            
                            
                            <hr>    
                        
                            </div> <!--Cpf para digitar-->
                        </div>
                    </div>
                </div>
            </div>
    </form>


</main>