
<?php
//codigo errado
function f ($a, $b, $c){
    if ($a <= 0) { echo 'erro'; return; }
    if ($b <= 0) { echo 'erro'; return; }
    if ($c <= 0) { echo 'erro'; return; }

    $x = $a * $b;
    $x = $x - ($x * 0.15);
    $x = $x * 1.12;

    echo "Enviando email para: $c"
    echo "Salvando no banco: $x"
    echo "RECIBO - Valor: $x | Email: $c"
}