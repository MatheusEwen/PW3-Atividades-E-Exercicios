<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row mt-3 ">
        <div class="col-5 mx-auto">
            <div class="card ">
                <div class="card-body">
                    <h5 class="card-title">Login - olx</h5>
                    <fieldset>
                    <legend><h1>Login - OLX Clone</h1></legend>
                    <form action="index.php?classe=UsuarioController&metodo=logarUsuario" method="post">
                        E-mail: <br>
                        <input type="email" name="email" require><br>
                        Senha: <br>
                        <input type="password" name="senha" require><br>
                        <input type="submit" value="Entrar" class="btn btn-primary mt-3">
                        <a href="index.php?classe=UsuarioController&metodo=recuperarSenha" class="mt-3">Esqueceu a senha?</a>
                    </form>
                    </fieldset>
            </div>
        </div>
    </div>
</div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>