<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastro Usuário</title>
</head>
<body>

<?php
include_once "menu.php";
?>
<div class="container">
    <div class="row mt-3">
        <div class="col-sm-8 mx-auto">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Cadastro de Usuários
                </div>
                <div class="card-body">
                    <form action="index.php?classe=UsuarioController&metodo=cadastrarUsuario" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nome:</label>
                            <input type="text" class="form-control" name="nome" placeholder="Informe o nome do usuário">
                        </div>
                        <div class="form-group">
                            <label>E-mail:</label>
                            <input type="email" class="form-control" name="email" placeholder="Informe o email do usuário">
                        </div>
                        <div class="form-group">
                            <label>Senha:</label>
                            <input type="password" class="form-control" name="senha" placeholder="Informe a senha do usuário">
                        </div>
                        <div class="form-group">
                            <label>Foto do usuário:</label>
                            <input type="file" name="foto">
                        </div>
                        <div class="form-group">
                            <label>Acesso:</label>
                            <select name="acesso" class="form-control">
                                <option value="1">Administrador</option>
                                <option value="2">Usuário</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Gravar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>