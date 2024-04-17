<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Controle de Clientes</h1>

    <form method="post" action="cadastro.php">
        <label>Nome:</label>
        <input type="text" name="nome" required><br>

        <label>Idade:</label>
        <input type="text" name="idade" required><br>

        <label>Telefone:</label>
        <input type="text" name="telefone" required><br>

        <label>CPF:</label>
        <input type="text" name="cpf" required><br>

        <label>E-mail:</label>
        <input type="text" name="email" required><br>

        <label>Endereço:</label>
        <input type="text" name="endereco" required><br>

        <label>Cidade:</label>
        <input type="text" name="cidade" required><br>

        <label>Estado:</label>
        <select id="estado" name="estado" required>
            <option value="">- Selecione -</option>
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
            <option value="EX">Estrangeiro</option>
        </select><br>

        <input type="submit">
    </form>

</body>
</html>