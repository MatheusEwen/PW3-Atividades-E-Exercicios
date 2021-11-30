<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Anunciante</title>
</head>
<body>
    <h1>Cadastro Anunciante</h1>
    <a href="index.php">Voltar para a página inicial</a><br>
    
    <form action="index.php?classe=AnuncianteController&metodo=cadastrarAnunciante" method="post">
        Nome:<br>
        <input type="text" name="nome"><br>

        Apelido:<br>
        <input type="text" name="apelido"><br>

        CPF:<br>
        <input type="text" name="cpf"><br>

        Celular:<br>
        <input type="text" name="celular"><br>

        E-mail:<br>
        <input type="email" name="email"><br>

        Senha:<br>
        <input type="password" name="senha"><br>

        Data de Nascimento:<br>
        <input type="date" name="datanascimento"><br>

        CEP:<br>
        <input type="text" name="cep"><br>

        Rua:<br>
        <input type="text" name="rua"><br>

        Bairro:<br>
        <input type="text" name="bairro"><br>

        Cidade:<br>
        <input type="text" name="cidade"><br>

        Estado:<br>
        <select name="estado">
        <option value="AC">Acre</option>
        <option value="AL">Alagoas</option>
        <option value="AP">Amapá</option>
        <option value="AM">Amazonas</option>
        <option value="BA">Bahia</option>
        <option value="CE">Ceará</option>
        <option value="DF">Distrito Federal</option>
        <option value="ES">Espírito Santo</option>
        <option value="GO">Goiás</option>
        <option value="MA">Maranhão</option>
        <option value="MT">Mato Grosso</option>
        <option value="MS">Mato Grosso do Sul</option>
        <option value="MG">Minas Gerais</option>
        <option value="PA">Pará</option>
        <option value="PB">Paraíba</option>
        <option value="PR">Paraná</option>
        <option value="PE">Pernambuco</option>
        <option value="PI">Piauí</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="RN">Rio Grande do Norte</option>
        <option value="RS">Rio Grande do Sul</option>
        <option value="RO">Rondônia</option>
        <option value="RR">Roraima</option>
        <option value="SC">Santa Catarina</option>
        <option value="SP">São Paulo</option>
        <option value="SE">Sergipe</option>
        <option value="TO">Tocantins</option>
        </select><br>

        Número:<br>
        <input type="text" name="numero"><br>

        Status:<br>
        <select name="status">
            <option value="1">Ativo</option>
            <option value="0">Inativo</option>
        </select><br><br>

        <input type="submit" value="Gravar">
    </form>
</body>
</html>