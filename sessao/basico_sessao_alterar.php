<?php
session_start();
print_r($SESSION);

$_SESSION['email'] = 'gabrielfilho@emailaz.com.br';
?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome'] ?><br>
    <b>Email: </b> <?= $_SESSION['email'] ?>
</p>

<p>
    <a href="basico_sessao.php">Voltar</a>
</p>
<p>
    <a href="basico_sessao_limpar.php"></a>
</p>