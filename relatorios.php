<?php
	use \app\Entity\Usuario;
	use \app\Entity\Matricula;
	use \app\Entity\Pagamento;
	use \app\Entity\Planos;
	use \app\Entity\Treinos;
	
	require_once 'app\Entity\Usuario.php';
    require_once 'app/Entity/Matricula.php';
    require_once 'app/Entity/Pagamentos.php';
    require_once 'app/Entity/Treinos.php';
    require_once 'app/Entity/Planos.php';

    $matricula = Matricula::getMatricula();
    $usuario = Usuario::getUsuarios();
    $plano = Planos::getPlanos();
    $treino = Treinos::getTreinos();
    $pagamentos = Pagamento::getPagamentos();

//contagem de elementos de um array (de toda a lista)

    $totalAlunos = count($usuario);
    $totalMatricula = count($matricula);
    $totalPlano = count($plano);
    $totalTreino = count($treino);
    $totalPagamentos = count($pagamentos);



    $contgUsuarios = 0;
    $contgMatricula = 0;
    $totalMatriculas = 0;
    $contgPlano = 0;
    $contgTreino = 0;
    $contgTreinoFinalzd = 0;
    $contgPagamentos = 0;
    $ValorPago = 0;
    //data atual
    $mesAtual = date('m');
    $anoAtual = date('Y');



    foreach($usuario as $us){
        if($us->status == 'ativo'){

            $contgUsuarios ++;

        }
    }
    foreach($matricula as $mat){
        
        
        $mesMatricula = date('m',strtotime($mat->data_inic));
        $anoMatricula = date('Y', strtotime($mat->data_inic));
        if($mat->status == 'ativo'){
            $contgMatricula ++;
            
            }
            if($mesMatricula == $mesAtual && $anoMatricula == $anoAtual && $mat->status == 'ativo' || $mat->status == 'suspensa' ){
            $totalMatriculas ++;
            }
    }
    foreach($pagamentos as $pag){
        if($pag->status_pago=='pago'){
            
        //data registrada dos dados do banco e atribui as var do mes e ano atuais
            $mesPagamento = date('m', strtotime($pag->data_pag));
            $anoPagamento = date('Y', strtotime($pag->data_pag));
            
            //pega o mes atual e ve se bate com o mes e o ano do dado registrado no banco se sim vai somar e exibir!
            if($mesPagamento == $mesAtual && $anoPagamento == $anoAtual){
                
                $contgPagamentos++;
                $ValorPago += $pag->valor_pag;
                $Valor = number_format($ValorPago, 2, ',', '.');
        }

    }
        
        
    }

    foreach($plano as $plan){
        if($plan->status_plano == 'ativo'){
            $contgPlano ++;
        }
    }
    foreach($treino as $trei){
        $mesTreino = date('m', strtotime($trei->data_treinos));
        $anoTreino = date('Y', strtotime($trei->data_treinos));

        if($trei->status_treinos == 'ativo'){
            $contgTreino ++;
        }  
        elseif($trei->status_treinos == 'finalizado' && $mesTreino == $mesAtual && $anoTreino == $anoAtual){
            $contgTreinoFinalzd ++;
        

        }
    }
    
    ?>

<div class="col-xl-12">
	<div style="display: flex; justify-content:space-around; ">

			<div class="card text-center"  style="width: 20%; margin-top: 3%; border: 2px solid #8CDDCD;">
										<div class="card-body">
											<h5 class="card-title">Total de Alunos Cadastrados</h5>
											<h2 class="card-text"><?=$contgUsuarios?></h2>
											
										</div>
									</div>
									
									
			<div class="card text-center"  style="width: 20%; margin-top: 3%; border: 2px solid #8CDDCD;">
										<div class="card-body">
											<h5 class="card-title">Matriculas Ativas</h5>
											<h2 class="card-text"><?=$contgMatricula?></h2>
										
										</div>
									</div>
									
			<div class="card text-center"  style="width: 20%; margin-top: 3%; border: 2px solid #8CDDCD;">
										<div class="card-body">
											<h5 class="card-title">Total de Pagamentos</h5>
											<h2 class="card-text"><?=$contgPagamentos?></h2>
										
										</div>
									</div>
                                    
            <div class="card text-center"  style="width: 20%; margin-top: 3%; border: 2px solid #8CDDCD;">
                                        <div class="card-body">
                                            <h5 class="card-title">Total de Treinos Ativos</h5>
											<h2 class="card-text"><?=$contgTreino?></h2>
                                            
										</div>
									</div>
									
                                    <div class="card text-center"  style="width: 20%; margin-top: 3%; border: 2px solid #8CDDCD;">
                                        <div class="card-body">
                                            <h5 class="card-title">Planos cadastrados</h5>
											<h2 class="card-text"><?=$contgPlano?></h2>
                                            
										</div>
									</div>
									
                                </div>	

                        <div class="col-xl-12">
	                        <div style="display: flex; justify-content:center; ">
                                
                                 <div class="card text-center"  style="width: 20%; margin-top: 3%; border: 2px solid #8CDDCD;">
                                        <div class="card-body">
                                            <h5 class="card-title">Valor recebido mensalmente</h5>
											<h2 class="card-text">R$ <?=$Valor?></h2>
                                            
										</div>
									</div>
                                    
                                    <div class="card text-center"  style="width: 20%; margin-top: 3%; border: 2px solid #8CDDCD;">
                                           <div class="card-body">
                                               <h5 class="card-title">Treinos realizados neste mes</h5>
                                               <h2 class="card-text"><?=$contgTreinoFinalzd?></h2>
                                               
                                           </div>
                                       </div>

                                    <div class="card text-center"  style="width: 20%; margin-top: 3%; border: 2px solid #8CDDCD;">
                                           <div class="card-body">
                                               <h5 class="card-title">Matriculas realizadas neste mes</h5>
                                               <h2 class="card-text"><?=$totalMatriculas?></h2>
                                               
                                           </div>
                                       </div>
                                    
                                </div>
									</div>






									
									
									
									


						<!--Para mais cards-->
																	
								</div>

							
															
									</div>
                