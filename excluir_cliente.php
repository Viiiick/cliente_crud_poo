<?php 
include ("cliente.php");

$id = $_GET['id_cliente'];

$cliente_class = new Cliente();
$cliente = $cliente_class->excluir_cliente($id)
?>