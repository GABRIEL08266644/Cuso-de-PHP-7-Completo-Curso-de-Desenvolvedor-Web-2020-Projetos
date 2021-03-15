<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Formulário</div>

<h2>Cadastro</h2>

<?php
if(count($_POST) > 0) {
    if(!filter_input(INPUT_POST, "nome")) {
        echo 'Nome é obrigatório', '<br>';
    }
    
    if(filter_input(INPUT_POST, "nascimento")) {
        $data = DateTime::createFromFormat(
            'd/m/y', $_POST['nascimento']);
        if(!$data) {
            echo 'Data deve estar no padrão dd/mm/aaaa', '<br>';
        }
    }
    
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo 'Email inválido', '<br>';
    }

    if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
        echo 'Site inválido', '<br>';
    }

    $filhosConfig = [
        "options" => ["min_range"=>0, "max_range"=>20]
    ];    
}


?>

<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="siteome">Nome</label>
            <input type="text" class="form-control" 
            name="nome" id="nome" 
            placeholder="Nome"
            value="<?= $_POST['nome']?>">
        </div>
        <div class="form-group col-md-3">
            <label for="nome">Nascimento</label>
            <input type="nascimento" class="form-control" 
            name="nascimento" id="nascimento" 
            placeholder="Nascimento"
            value="<?= $_POST['nascimento']?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6 ">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" 
            name="email" id="email" 
            placeholder="E-mail"
            value="<?= $_POST['email']?>">
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control" 
            name="site" id="site" 
            placeholder="Site" 
            value="<?= $_POST['site']?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6 ">
            <label for="filhos">Qtde de Filhos</label>
            <input type="number" class="form-control" 
            name="filhos" id="filhos" 
            placeholder="Qtde de Filhos"
            value="<?= $_POST['filhos']?>">
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control" 
            name="salario" id="salario" 
            placeholder="Salário"
            value="<?= $_POST['salario']?>">
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>