<div class="titulo">Sessão</div>

<?php
session_start();

print_r($SESSION);
echo '<br>';

if(!$SESSION['nome']) {
    $_SESSION['nome'] = 'Gabriel';
}


if(!$SESSION['email']) {
    $_SESSION['email'] = 'gabriel@azmil.com';
}

print_r($_SESSION);
?>

<p>
    <a href="/sessao/basico_sessao_alterar.php">
        Alterar Sessão
    </a>
</p>