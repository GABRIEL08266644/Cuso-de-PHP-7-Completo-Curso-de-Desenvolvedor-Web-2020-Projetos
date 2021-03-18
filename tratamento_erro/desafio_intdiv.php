<?php
namespace Aritmetica;

class NaoInteroException extends \Exception {

}

function intdiv($a, $b) {
    if($b == 0) {
        throw new \DivisionByZeroError();
    }

    if($a % $b > 0) {
        throw new NaoInteroException();
    }
    return $a / $b;
}
?>