<?php

//A sessão precisa ser iniciada em cada página diferente
if(!isset($_SESSION)) session_start();

//verifica se não há a variavel da sessão que indentifca o usuário.
if(!isset($_SESSION['UsuarioID'])) {
    //Destroi a sessão por segurança

    session_destroy();

    //redirecionando o visitante de volta pro login
    header("Location: index.php"); exit;

}
?>
<h1>Página restrita</h1>
<p>Olá, <?php echo $_SESSION['UsuarioNome']; ?>!</p>
<p>O seu nivel de usuario é: <?php echo $_SESSION['UsuarioNivel']; ?></p>

<a href="cadUsuario.php">Cadastro de Usuário</a><br>
<a href="teste_seleciona.php">seleciona</a><br>
<a href="teste_consulta.php">consultar Usuário</a><br>
<a href="teste_excluir.php">Excluir Usuário</a><br>

<a href="sair.php">Sair</a>