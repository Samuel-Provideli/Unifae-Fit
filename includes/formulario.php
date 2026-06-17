<main>

<div class="card borderless" style="width: 30%; margin: 3%;">
			<div class="align-items-center">
				<div class="col-md-12">
					<div class="card-body">
						<h4 class="f-w-400">Cadastrar Aluno</h4>
						<hr> 



    <form action="cadastrar.php" method="post">
    
                            <div class="form-group mb-3">
                                <label for="date">Digite seu nome completo:</label>
                                <input type="text" name="nome" class="form-control" id="Username" placeholder="Nome completo" maxlength="225">
                            </div> <!--Nome para digitar-->
    
    
                            <div class="form-group mb-3">
                                <label for="date">Digite seu cpf:</label>
                                <input type="tel" name="cpf" class="form-control" placeholder="000 000 000 00"  minlength="12" maxlength="14" pattern="(?:\d\s*){11}" title="Formato esperado: 000 000 000 00">
    
    
                            </div> <!--Cpf para digitar-->
    
    
                            <div class="form-group mb-3">
                                <label for="date">Data de nascimento:</label>
                                <input type="date" name="data_nasc" class="form-control" placeholder="Data nascimento">
                            </div> <!--Data para digitar-->
    
    
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
                            <p class="mb-2">Already have an account? <a href="auth-signin.html" class="f-w-400">Signin</a></p>
                        </div>
                    </div>
                </div>
            </div>
    </form>


</main>