<?php

use \app\Entity\Usuario;

require_once 'app\Entity\Usuario.php';

$usuarios = Usuario::getUsuarios();

$resultado = '';

foreach($usuarios as $usuario){
    $resultado .= '<tr>
                    <td>'.$usuario->idUsuario.'</td>
                    <td>'.$usuario->nome.'</td>
                    <td>'.$usuario->cpf.'</td>
                    <td>'.$usuario->data_nasc.'</td>
                    <td>'.$usuario->telef.'</td>
                    <td>'.$usuario->endereco.'</td>
                    <td>'.$usuario->status.'</td>
                    
                    
                    </tr>';
                }
                
                
                
?>
                
                <!-- Antigo Botao de Editar inutilizado e nao acabado
                <td><a href="editar.php?idUsuario='.$usuario->idUsuario.'">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
                <a href="excluir.php?idUsuario='.$usuario->idUsuario.'">
                  <button type="button" class="btn btn-danger">Excluir</button>
                </a></td> -->


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
                </tr>
            </thead>
            <tbody>
                <?= $resultado ?>
            </tbody>
            
        </table>
        
        
    </main>