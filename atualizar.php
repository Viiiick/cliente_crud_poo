<?php 
include ("cliente.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $cliente = new Cliente();
    
    $cliente->nome=$_POST['nome'];
    $cliente->idade=$_POST['idade'];
    $cliente->telefone=$_POST['telefone'];
    $cliente->cpf=$_POST['cpf'];
    $cliente->email=$_POST['email'];
    $cliente->endereco=$_POST['endereco'];
    $cliente->cidade=$_POST['cidade'];
    $cliente->estado=$_POST['estado'];

    $cliente->editar_cliente($_POST['id_cliente']);
}

?>