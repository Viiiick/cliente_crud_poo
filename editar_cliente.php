<?php 
include ("cliente.php");
$id = $_GET['id_cliente'];

$cliente_class = new Cliente();
$cliente = $cliente_class->buscar_id_cliente($id)
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Editar Cliente</h1>

    <form method="post" action="atualizar.php">
        <input type="hidden" name="id_cliente" value="<?= $cliente['id_cliente']?>">
    
        <label>Nome:</label>
        <input type="text" name="nome" value="<?= $cliente['nome']?>" required><br>

        <label>Idade:</label>
        <input type="text" name="idade" value="<?= $cliente['idade']?>" required><br>

        <label>Telefone:</label>
        <input type="text" name="telefone" value="<?= $cliente['telefone']?>" required><br>

        <label>CPF:</label>
        <input type="text" name="cpf" value="<?= $cliente['cpf']?>" required><br>

        <label>E-mail:</label>
        <input type="text" name="email" value="<?= $cliente['email']?>" required><br>

        <label>Endereço:</label>
        <input type="text" name="endereco" value="<?= $cliente['endereco']?>" required><br>

        <label>Cidade:</label>
        <input type="text" name="cidade" value="<?= $cliente['cidade']?>" required><br>

        <label>Estado:</label>
        <select id="estado" name="estado" required>
            <option value="<?= $cliente['estado']?>"><?= $cliente['estado']?></option>
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
