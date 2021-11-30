<?php

    //Verifica se houver POST E SE O USUÁRIO É(SÃO) vazios(s)
    if(!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))){
        header("Location: index.php");
        exit;
    } else {

        require_once("conn.php");
        $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);

        //Validação do usuário/senha digitados
        $sql = "SELECT codUsuario, nomeUsuario, tipoUsuario FROM tbusuario WHERE (nomeUsuario = '".$usuario."') AND (senhaUsuario = '".($senha)."')";

        $query = mysqli_query($conn, $sql);
        if (mysqli_num_rows($query) != 1) {
            //Mensagem de erro quando os dados são inválidos e/ou o usuario não foi encontrado.

            echo"Login inválido!";
            exit;
        } else {
            // Salva os dados encontrados na variavel $resultado
            $resultado = mysqli_fetch_assoc($query);

            //se a sessão não existir, inicia uma

            if(!isset($_SESSION)){
                session_start();
            }
            //slava os dados encontrados na sessão
            $_SESSION['UsuarioCod'] = $resultado['codUsuario'];
            $_SESSION['UsuarioNome'] = $resultado['nomeUsuario'];
            $_SESSION['UsuarioNivel'] = $resultado['tipoUsuario'];
            
            //redireciona o visitante
            header("Location: restrito.php");
            exit;
        }

    }

?>