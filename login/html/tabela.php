<?php
require '../php/Usuario.class.php';
$usuario = new Usuario();
$con = $usuario->conecta();

if ($con) {

    $lista = $usuario->listarUsuarios();
    if (empty($lista)) {
        echo "NAO EXISTEM USUARIOS";
        exit();
    } else {
        
        ?>
        <table>
            <tr>
                <th>Codigo</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>

            <?php
            foreach ($lista as $item) {
                $id = $item['id'];
                $nome = $item['nome'];
                $email = $item['email'];
            ?>

                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $nome; ?></td>
                    <td><?php echo $email; ?></td>
                </tr>

                <?php } ?>
            </table>
        <?php
    }
} else {
    echo "banco de dados indisponivel";
    exit();
}

