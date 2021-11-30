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
        $sql = "SELECT codAluno, nomeAluno, usuario, senha FROM tbaluno WHERE (usuario = '".$usuario."') AND (senha = '".($senha)."')";

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
            //salava os dados encontrados na sessão
            $_SESSION['alunoCod'] = $resultado['codAluno'];
            $_SESSION['alunoNome'] = $resultado['nomeAluno'];
            $_SESSION['alunoUsuario'] = $resultado['usuario'];
            
            //redireciona o visitante
            header("Location: conNota.php");
            exit;
        }

    }

?>