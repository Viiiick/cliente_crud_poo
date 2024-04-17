<?php 
include ("cliente.php");

$cliente = new Cliente();
$clientes = $cliente->buscar_clientes();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
        }
        
        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            text-align: center;
            border-collapse: collapse;
        }

        th {
            background-color: rgb(39, 39, 39);
            color: white;
            font-weight: normal;
            padding: 5px;
        }

        td {
            padding: 5px;
            background-color: rgb(216, 216, 216);
        }
    </style>
</head>
<body>
    <h1>Lista de Clientes</h1>

    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Telefone</th>
            <th>CPF</th>
            <th>E-mail</th>
            <th>Endereço</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th></th>
            <th></th>
        </tr>
        
        <?php foreach ($clientes as $row_cliente) : ?>

        <tr>
            <td><?=$row_cliente['nome']?></td>
            <td><?=$row_cliente['idade']?></td>
            <td><?=$row_cliente['telefone']?></td>
            <td><?=$row_cliente['cpf']?></td>
            <td><?=$row_cliente['email']?></td>
            <td><?=$row_cliente['endereco']?></td>
            <td><?=$row_cliente['cidade']?></td>
            <td><?=$row_cliente['estado']?></td>
            <td><a href="editar_cliente.php?id_cliente=<?=$row_cliente['id_cliente']?>">Editar</a></td>
            <td><a href="excluir_cliente.php?id_cliente=<?=$row_cliente['id_cliente']?>">Excluir</a></td>
        </tr>

        <?php endforeach;?>
        </table>
</body>
</html>