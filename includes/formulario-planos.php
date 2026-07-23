<main>

<div class="card borderless" style="width: 30%; margin: 3%;">
			<div class="align-items-center">
				<div class="col-md-12">
					    <div class="card-body">
						<h4 class="f-w-400">Cadastrar Plano</h4>
						<hr> 


    <?php
    //Basicamente confere se a valor de id, se ouver atualiza se nao cadastra, resolve erro de usar o mesmo form
    if(isset($obPlanos->idPlanos) && $obPlanos->idPlanos){
        $acaoPlanos = 'editar-planos.php?idPlanos=' . $obPlanos->idPlanos;
    }
    else{
        $acaoPlanos = 'cadastrar-planos.php';
    }
    
    
    ?>



    <form action="<?=$acaoPlanos?>" method="post">
    
                            <div class="form-group mb-3">
                                <label for="text">Digite o nome do novo Plano:</label>
                                <input type="text" name="nome_plano" class="form-control" id="Username" placeholder="Nome do plano" maxlength="150" value="<?=$obPlanos->nome_plano?>">
                            </div> <!--Nome do plano-->


                            <div class="form-group mb-3">
                                <label for="text">Digite uma breve descrição do plano:</label>
                                <input type="text" name="desc_plano" class="form-control" id="Username" placeholder="Descrição" maxlength="255" value="<?=$obPlanos->desc_plano?>">
                            </div> <!--Nome do plano-->
    
    
                            
                            <div class="form-group mb-3">
                                <label for="num">Duração do plano:</label>
                                <input type="num" name="duracao_plano" class="form-control" placeholder="Duração" value="<?=$obPlanos->duracao_plano?>">
                            </div> <!--Data para digitar-->
                            
                            
                            <div class="form-group mb-3">
                                <label for="num">Valor do Plano</label>
                                <input type="text" id="num" name="valor_plano" maxlength="5" class="form-control" placeholder="Valor" pattern="^[0-9]{1,4}(.[0-9]{1,3})?$" value="<?=$obPlanos->valor_plano?>"> <!--valor do plano-->
                            </div>


                            <div class="form-group mb-3">
                                <label for="num">Quantidade de Aulas</label>
                                <input type="text" id="num" name="qnt_aulas" maxlength="5" class="form-control" placeholder="Quantidade de aulas" pattern="(?:\d\s*){1,5}" title="Formato esperado: 12345" value="<?=$obPlanos->qnt_aulas?>">
                            </div>  <!--digitar o qnt de aulas-->
                            
                            <div>
                                <div class="form-check form-check-inline">
                                    <label class="form-control">
                                        <input type="radio" name="status_plano" value="ativo" checked> Ativo
                                    </label>

                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-control">
                                        <input type="radio" name="status_plano" value="inativo" <?=$obPlanos->status_plano == 'inativo' ? 'checked' : ''?>> Inativo
                                    </label>

                                </div>
                            </div>




                            
                            <button class="btn btn-primary btn-block mb-4" type="submit">Cadastrar Plano</button>
                            
                            
                            
                            <hr>    
                        
                            </div> <!--Cpf para digitar-->
                        </div>
                    </div>
                </div>
            </div>
    </form>


</main>