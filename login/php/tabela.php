<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <style>
    .fundo{
        background: #83cee9ff;
    }
  </style>
</head>
<body class="container fundo">

<?php
require '../php/Usuario.class.php';
$usuario = new Usuario();
$con = $usuario->conecta();

if( !$con ){
    echo "Banco indisponível. Tente mais tarde!";
    exit();
}else{
    $usuarios = $usuario->listarUsuarios();

    //montagem do html da tabela
    $table  = '<table class = "table table-striped">';
    $table .= '<thead>';
    $table .= '<tr>';
    $table .= '<th>Selecionar</th>';
    $table .= '<th>Codigo</th>';
    $table .= '<th>Nome</th>';
    $table .= '<th>Email</th>';
    $table .= '</tr>';
    $table .= '<tbody>';
    //laco de repeticao para inclusao dos dados na tabela
    foreach( $usuarios as $item ){
        $id    = $item['id'];
        $nome  = $item['nome'];
        $email = $item['email'];

        $table .= '<tr>';
        $table .= "<td><input type = 'checkbox' value = $id></td>";
        $table .= "<td>$id</td>";
        $table .= "<td>$nome</td>";
        $table .= "<td>$email</td>";
        $table .= "<td><a class = 'btn btn-info' href='editar.php?id'>Editar</a></td>";
        $table .= "<td><a class = 'btn btn-danger' href='deletar.php?id'>Excluir</a></td>";
        $table .= "</tr>";                      
    }            
    $table .= "</tbody>";
    $table .='</thead>';
    $table .= '</table>';                
}

echo $table;
