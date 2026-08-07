<main>

<div class="card borderless" style="width: 30%; margin: 3%;">
			<div class="align-items-center">
				<div class="col-md-12">
					<div class="card-body">
						<h4 class="f-w-400">Editar Dados</h4>
						<hr> 



    <form action="editar.php?idUsuario=<?= $obUsuario->idUsuario?>" method="post">
    
    
                            <div class="form-group mb-3">
                                <label for="text">Numero de telefone:</label>
    
                                <input type="tel" name="telefone" class="form-control" placeholder="55 12 1234-5678"  minlength="12" maxlength="16" pattern="[0-9]{2}\s[0-9]{2}\s[0-9]{4,5}-[0-9]{4}" title="Formato esperado: 55 19 91234-5678"> <!--numero de telefone-->
                            </div>
    
                            <div class="form-group mb-3">
                                <label for="date">Digite seu endereço:</label>
                                <input type="text" name="endereco" class="form-control" placeholder="Endereço" maxlength="150">
                            </div> <!--endereço-->

                            
    
    
                            <button class="btn btn-primary btn-block mb-4" type="submit">Cadastre-se</button>
    
    
    
                            <hr>    
                          
                        </div>
                    </div>
                </div>
            </div>
    </form>


</main>

 <!--                           <div class="form-group mb-3">
                                <select name="plataforma" required="required" class="form-control">
                                    <option value="">Escolha um plano</option>
                                    <option value="Básico">Básico</option> 
                                    <option value="Intermediário">Intermediário</option>
                                    <option value="Premium">Premium</option>
                                </div>
                                </select>                     OPCAO DE ESCOLHAS PARA INCLUIR FUTURAMENTE NO FORM DO USUAURIO -->