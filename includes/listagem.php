<?php

$resultado = '';
use \App\Enitity\usuario;
$usuarios = usuario::getUsuario();


foreach($usuarios as $usuario){
    $resultado .= '<tr>
                    <td>'.$usuario->id.'</td>
                    <td>'.$usuario->nome.'</td>
                    <td>'.$usuario->cpf.'</td>
                    <td>'.$usuario->data_nasc.'</td>
                    <td>'.$usuario->telefone.'</td>
                    <td>'.$usuario->endereco.'</td>
                  </tr>';
}



?>


<main>

<section>

</section>

<table class="table mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Data Nasc</th>
            <th>Telefone</th>
            <th>Endereco</th>
        </tr>
    </thead>
    <tbody>
        <?= $resultado ?>
    </tbody>

</table>


</main>