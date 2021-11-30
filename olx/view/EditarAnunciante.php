<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Anunciante</title>
</head>
<body>
    <h1>Editar Anunciante</h1>
    <a href="index.php?classe=AnuncianteController&metodo=abrirConsulta">Voltar para a página de consulta</a><br>
    
    <form action="index.php?classe=UsuarioController&metodo=atualizarAnunciante" method="post">
        
        <input type="hidden" name="codanunciante" value="<?php echo $dadosAnunciante->codanunciante; ?>" readonly>
    
        Nome:<br>
        <input type="text" name="nome" value="<?php echo $dadosAnunciante->nome; ?>"><br>

        Apelido:<br>
        <input type="text" name="apelido" value="<?php echo $dadosAnunciante->apelido; ?>"><br>

        CPF:<br>
        <input type="text" name="cpf" value="<?php echo $dadosAnunciante->cpf; ?>"><br>

        Celular:<br>
        <input type="text" name="celular" value="<?php echo $dadosAnunciante->celular; ?>"><br>

        E-mail:<br>
        <input type="email" name="email" value="<?php echo $dadosAnunciante->email; ?>"><br>

        Senha:<br>
        <input type="password" name="senha" required><br>

        Data de Nascimento:<br>
        <input type="date" name="datanascimento" value="<?php echo $dadosAnunciante->datanascimento; ?>"><br>

        CEP:<br>
        <input type="text" name="cep" value="<?php echo $dadosAnunciante->cep; ?>"><br>

        Rua:<br>
        <input type="text" name="rua" value="<?php echo $dadosAnunciante->rua; ?>"><br>

        Bairro:<br>
        <input type="text" name="bairro" value="<?php echo $dadosAnunciante->bairro; ?>"><br>

        Cidade:<br>
        <input type="text" name="cidade" value="<?php echo $dadosAnunciante->cidade; ?>"><br>

        Estado:<br>
        <select name="estado">
        <option value="AC" <?php if($dadosAnunciante->status == "AC") echo "selected";?>>Acre</option>
        <option value="AL" <?php if($dadosAnunciante->status == "AL") echo "selected";?>>Alagoas</option>
        <option value="AP" <?php if($dadosAnunciante->status == "AP") echo "selected";?>>Amapá</option>
        <option value="AM" <?php if($dadosAnunciante->status == "AM") echo "selected";?>>Amazonas</option>
        <option value="BA" <?php if($dadosAnunciante->status == "BA") echo "selected";?>>Bahia</option>
        <option value="CE" <?php if($dadosAnunciante->status == "CE") echo "selected";?>>Ceará</option>
        <option value="DF" <?php if($dadosAnunciante->status == "DF") echo "selected";?>>Distrito Federal</option>
        <option value="ES" <?php if($dadosAnunciante->status == "ES") echo "selected";?>>Espírito Santo</option>
        <option value="GO" <?php if($dadosAnunciante->status == "GO") echo "selected";?>>Goiás</option>
        <option value="MA" <?php if($dadosAnunciante->status == "MA") echo "selected";?>>Maranhão</option>
        <option value="MT" <?php if($dadosAnunciante->status == "MT") echo "selected";?>>Mato Grosso</option>
        <option value="MS" <?php if($dadosAnunciante->status == "MS") echo "selected";?>>Mato Grosso do Sul</option>
        <option value="MG" <?php if($dadosAnunciante->status == "MG") echo "selected";?>>Minas Gerais</option>
        <option value="PA" <?php if($dadosAnunciante->status == "PA") echo "selected";?>>Pará</option>
        <option value="PB" <?php if($dadosAnunciante->status == "PB") echo "selected";?>>Paraíba</option>
        <option value="PR" <?php if($dadosAnunciante->status == "PR") echo "selected";?>>Paraná</option>
        <option value="PE" <?php if($dadosAnunciante->status == "PE") echo "selected";?>>Pernambuco</option>
        <option value="PI" <?php if($dadosAnunciante->status == "PI") echo "selected";?>>Piauí</option>
        <option value="RJ" <?php if($dadosAnunciante->status == "RJ") echo "selected";?>>Rio de Janeiro</option>
        <option value="RN" <?php if($dadosAnunciante->status == "RN") echo "selected";?>>Rio Grande do Norte</option>
        <option value="RS" <?php if($dadosAnunciante->status == "RS") echo "selected";?>>Rio Grande do Sul</option>
        <option value="RO" <?php if($dadosAnunciante->status == "RO") echo "selected";?>>Rondônia</option>
        <option value="RR" <?php if($dadosAnunciante->status == "RR") echo "selected";?>>Roraima</option>
        <option value="SC" <?php if($dadosAnunciante->status == "SC") echo "selected";?>>Santa Catarina</option>
        <option value="SP" <?php if($dadosAnunciante->status == "SP") echo "selected";?>>São Paulo</option>
        <option value="SE" <?php if($dadosAnunciante->status == "SE") echo "selected";?>>Sergipe</option>
        <option value="TO" <?php if($dadosAnunciante->status == "TO") echo "selected";?>>Tocantins</option>
        </select><br>

        Número:<br>
        <input type="text" name="numero" value="<?php echo $dadosAnunciante->numero; ?>"><br>

        Status:<br>
        <select name="status">
            <option value="1" <?php if($dadosAnunciante->status == 1) echo "selected";?>>Ativo</option>
            <option value="0" <?php if($dadosAnunciante->status == 0) echo "selected";?>>Inativo</option>
        </select><br><br>

        <input type="submit" value="Gravar">
    </form>
</body>
</html>