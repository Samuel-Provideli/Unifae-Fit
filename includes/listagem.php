<!DOCTYPE html>
<html lang="en">

<a href="realizar-cadastro.php" style="display: inline-block; text-decoration: none; margin: 2% 3%;">
                  <button type="button" class="btn btn-primary"><h4>Cadastrar Aluno</h4></button>
                </a>

<?php

use \app\Entity\Usuario;
use \app\Entity\Pagamento;

require_once 'app\Entity\Usuario.php';
require_once 'app\Entity\Pagamentos.php';


$usuarios = Usuario::getUsuarios();

$resultado = '';

foreach($usuarios as $usuario){

    //essa var guarda o seguinte comando: ele procura la na tabela pagamentos atraves o get(plural) pois falamos de varios dados nao é uma analise em um especifico, ele verifica atraves do id se algum id (dos usuarios) se relaciona com o status 'atrasado' para fornecer a informaçao no if e else

    $pagamAtrsdos = Pagamento::getPagamentos("id_usuario = ".$usuario->idUsuario." AND status_pago = 'atrasado'");
    


    //o count ele é um contador de array do php ele verifica se foi encontrado pelo menos 1 que corresponda com 'atrasado' por este motivo foi comparado com 0
    if(count($pagamAtrsdos) > 0){
        $statusExibido = 'inadimplente';
    } else {
        $statusExibido = $usuario->status;
    }

    $resultado .= '<tr>
                    <td>'.$usuario->idUsuario.'</td>
                    <td>'.$usuario->nome.'</td>
                    <td>'.$usuario->cpf.'</td>
                    <td>'.date("d/m/Y", strtotime($usuario->data_nasc)).'</td> 
                    <td>'.$usuario->telef.'</td>
                    <td>'.$usuario->endereco.'</td>
                    <td>'.$statusExibido.'</td>
                    
                  
                    <td><a href="editar.php?idUsuario='.$usuario->idUsuario.'">
                      <button type="button" class="btn btn-primary">Editar</button>
                    </a></td>
                    
                    </tr>';
                }
            //basicamnete a questao da data mostra a data correta porem no formato brasileiro, pois entra no date e a funçao strotime indica qual data deve ficar no padrão.
                
?>
                
              


<main>
    
    <section>
        
        </section>
        
        <table class="table bg-light mt-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Cpf</th>
                    <th>Data Nasc</th>
                    <th>Telefone</th>
                    <th>Endereco</th>
                    <th>Status</th>
                    <th>Atividades</th>
                </tr>
            </thead>
            <tbody>
                <?= $resultado ?>
            </tbody>
            
        </table>
        
        
    </main>