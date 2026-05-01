<?php
require '../php/Usuario.class.php';
$usuario = new Usuario();
$con = $usuario->conecta();

if( $con ){
    $lista = $usuario->listarUsuarios();
    if( empty( $lista) ){
        echo "Nao existem usuarios para listar";
        exit();
    }else{
        ?>
        <table>
            <tr>
                <th>Codigo</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
            <?php 
            foreach($lista as $item){
                $id    = $item['id'];
                $nome  = $item['nome'];
                $email = $item['email'];
                ?> 
                <tr>
                    <td> <?php echo $id;   ?> </td>
                    <td> <?php echo $nome; ?> </td>
                    <td> <?php echo $email;?> </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
    }
}else{
    echo "Banco de dados Indisponível. Tente mais tarde!";
    exit();
}
