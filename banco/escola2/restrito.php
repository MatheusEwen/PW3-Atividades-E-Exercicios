<?php

//A sessão precisa ser iniciada em cada página diferente
if(!isset($_SESSION)) session_start();

//verifica se não há a variavel da sessão que indentifca o usuário.
if(!isset($_SESSION['UsuarioCod'])  ) {
    //Destroi a sessão por segurança

    session_destroy();

    //redirecionando o visitante de volta pro login
    header("Location: index.php"); exit;

}
?>
<table>
<tr>
<td>
        <h1>Página restrita</h1>
    </td>
    <td colspan="4">
        <p>Olá, <?php echo $_SESSION['UsuarioNome']; ?>!</p>
    </td>
</tr>
<tr>
 <td colspan="5">
 <p>O seu nivel de usuario é: <?php echo $_SESSION['UsuarioNivel']; ?></p>
 </td>
</tr>

<tr>
    <td colspan="3">
    <p>Cadastro</p>
    <?php
    if($_SESSION['UsuarioNivel'] == 1) {

        echo"<a href='cadUsuario.php'>Cadastro de Usuário</a><br>
        <a href='cadAluno.php'>Cadastro de Aluno</a><br>
        <a href='cadProfessor.php'>Cadastro de Professor</a><br>
        <a href='cadDisciplina.php'>Cadastro de Disciplina</a><br>
        <a href='cadNota.php'>Cadastro de notas</a><br>";
    }


?>
</td>
<td>
<p>Consultas</p>
<a href="conUsuario.php">Consulta de Usuário</a><br>
<a href="conAluno.php">Consulta de Aluno</a><br>
<a href="conProfessor.php">Consulta de Professor</a><br>
<a href="conDisciplina.php">Consulta de Disciplina</a><br>
<a href="conNota.php">Consulta de notas</a><br>
</td>
<td>
<p>Buscas</p>
<a href="busUsuario.php">Buscas de Usuário</a><br>
<a href="busAluno.php">Buscas de Aluno</a><br>
<a href="busProfessor.php">Buscas de Professor</a><br>
<a href="busDisciplina.php">Buscas de Disciplina</a><br>
</td>
    
</tr>

</table>
<a href="sair.php">Sair</a>

<style>
body {
    background-color: lightblue;
}
table, th, td {
  border: 1px solid black;
}
table{
    width: 100%;
}
</style>