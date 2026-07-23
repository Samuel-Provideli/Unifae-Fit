<main>

<div class="card borderless" style="width: 40%; margin: 3%;">
			<div class="align-items-center">
				<div class="col-md-12">
					    <div class="card-body">
						<h4 class="f-w-400">Excluir este Plano</h4>
						<hr> 



    <form method="post">
    
                            <div class="form-group mb-3">
                                <label><h4>Deseja excluir o Plano: <?=$obPlanos->nome_plano?></h4></label>
                            </div>
                               

                            <a href="lista-planos.php">
                                <button  type="button" class="btn btn-success mb-4" style="width: 40%; margin: 3%;">Voltar</button>
                            </a>
                            
                            <button name="excluir" class="btn btn-danger mb-4" type="submit" style="width: 40%; margin: 3%;">Excluir</button>
                            
                            
                            
                            <hr>    
                        
                            </div> <!--Cpf para digitar-->
                        </div>
                    </div>
                </div>
            </div>
    </form>


</main>