<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Primeiro Formulario</title>
</head>
<body>
    <fieldset>
        <legend>Formulario 2 2020</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <td>nome:</td>
                </tr>
                <td>
                    <input type="text" name="txt_nome" id="txt_nome" size="30">
                </td>
                <tr>
                    <td>
                        Sexo:
                    </td>
                    <td>
                        <input type="radio" name="rdb_sexo" id="masculino">
                        masculino
                        <input type="radio" name="rdb_sexo" value="feminino">
                        Feminino
                    </td>
                </tr>
                <tr>
                    <td>
                        Nacionalidade(Brasileiro?):
                    </td>
                    <td>
                        <input type="radio" name="rdb_N" value="sim">
                        sim 
                        <input type="radio" name="rdb_N" id="nao">
                        Não 
                    </td>
                </tr>
                <tr>
                    <td>
                        Data de Nascimento:
                    </td>
                    <td>
                        <input type="date" name="data">
                    </td>
                </tr>
                <tr>
                    <td>
                        Documentos:
                    </td>
                    <td>
                        <input type="file" name="doc">
                    </td>
                </tr>
                <tr>
                    <td>
                        Estado Civil:
                    </td>
                    <td>
                        <select name="estado">
                            <option value="">&nbsp;</option>
                            <option value="sol">Solteiro</option>
                            <option value="cas">Casado</option>
                            <option value="sep">Separado</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="email" name="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        Senha:
                    </td>
                    <td>
                        <input type="password" name="senha">
                    </td>
                </tr>
                <tr>
                    <td>
                        Mensagem:
                    </td>
                    <td>
                        <textarea name="Mensagem" cols="25" rows="5"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        Área de Preferência:
                    </td>
                    <td>
                        <input type="checkbox" name="humanas" value="humanas">Humanas
                        <input type="checkbox" name="exatas" value="exatas">Exatas
                        <input type="checkbox" name="saude" value="saude">Saude
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="reset" name="Limpar">
                        <input type="submit" name="Cadastro">
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
    <?php
    
        $nome = $_POST['txt_nome'];
        $sexo = $_POST['rdb_sexo'];
        $nacionalidade = $_POST['rdb_N'];
        $data = $_POST['data'];
        $file = $_POST['doc'];
        $estado = $_POST['estado'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $mensagem = $_POST['Mensagem'];
        $exatas = $_POST['exatas'];
        $humanas = $_POST['humanas'];
        $saude = $_POST['saude'];
        
        if ($estado == 'sol'){
            $valor = 'Solteiro';
        } elseif($estado == 'cas') {
            $valor = 'Casado';
        } elseif ($estado == 'sep') {
            $valor = 'separado';
        } else {
            echo "<script>alert('Escolha um estado!');</script";
        }

        echo 'Nome:&nbsp'.$nome ;
        echo '<br>Sexo:&nbsp'.$sexo ;
        echo '<br>Data de Nascimento:&nbsp'.$data ;
        echo '<br>Documento:&nbsp'.$file ;
        echo '<br>Estado Civil:&nbsp'.$valor ;
        echo '<br>Email:&nbsp'.$email ;
        echo '<br>Senha:&nbsp'.$senha ;
        echo '<br>Mensagem:&nbsp'.$mensagem ;
        echo '<br>Área de Preferência:'.$exatas ;
        echo '<br>Área de Preferência:'.$humanas ;
        echo '<br>Área de Preferência:'.$saude ;
    
    ?>
</body>
</html>