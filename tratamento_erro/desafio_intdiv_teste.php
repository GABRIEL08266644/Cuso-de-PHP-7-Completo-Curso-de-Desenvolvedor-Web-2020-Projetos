<div class="titulo">Desafio intdiv</div>

<?php
require_once 'desafio_intdiv.php';
use function \Aritmetica\intdiv;

try {
    echo intdiv(8, 3) . '<br>';
} catch(\Aritmetica\NaoInteroException $e) {
    echo 'resultado nãi é um número inteiro<br>';
}

try {
    echo intdiv(8, 0) . '<br>';
} catch(DivisionByZeroError $e) {
    echo 'Divisão por zero';
}

echo intdiv(8, 2) . '<br>';
echo \intdiv(8, 2) . '<br>';
echo \intdiv(8, 3) . '<br>';
?>