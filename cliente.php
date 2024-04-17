<?php

class Cliente {
    public $nome;
    public $idade;
    public $telefone;
    public $cpf;
    public $email;
    public $endereco;
    public $cidade;
    public $estado;
    
    public function incluir_cliente() {
        
        include ("conn.php");
        
        $sql = "INSERT INTO cliente VALUES (null, '$this->nome', '$this->idade', '$this->telefone', 
        '$this->cpf', '$this->email', '$this->endereco', '$this->cidade', '$this->estado')";

        try {
            mysqli_query($conn, $sql);
        } catch (Exception $e){
            die("Erro ao cadastrar cliente: $e");
        }
    }

    public function buscar_clientes() {

        include ("conn.php");

        $sql = "SELECT * FROM cliente";
        $result = mysqli_query($conn, $sql);
        $clientes = array();

        try {
           if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $clientes[] = $row;
            }

            return $clientes;
           }
        } catch (Exception $e) {
            die("Erro ao buscar clientes: $e");
        }
    }

    public function editar_cliente($id) {
        
        include ("conn.php");

            $query_update = "UPDATE cliente SET 
            nome='$this->nome',
            idade='$this->idade',
            telefone='$this->telefone',
            cpf='$this->cpf',
            email='$this->email',
            endereco='$this->endereco',
            cidade='$this->cidade',
            estado='$this->estado'
            WHERE id_cliente=$id";  

            try {
                mysqli_query($conn, $query_update);
                header("location:lista_cliente.php");
            } catch (Exception $e) {
                echo "Deu ruim. $e";
            }
    }

    public function buscar_id_cliente($id) {
        
        include ("conn.php");

        try {
            $sql = "SELECT * FROM cliente WHERE id_cliente=$id";
            $result = mysqli_query($conn, $sql);
            $cliente = mysqli_fetch_array($result);

            return $cliente;
        } catch (Exception $e) {
            die("Erro ao buscar cliente: $e");
        }
    }

    public function excluir_cliente($id) {

        include ("conn.php");

        try {
            $sql = "DELETE FROM cliente WHERE id_cliente=$id";
            mysqli_query($conn, $sql);
            header("location:lista_cliente.php");
        } catch (Exception $e) {
            die("Erro ao excluir cliente: $e");
        }

    }
}

?>