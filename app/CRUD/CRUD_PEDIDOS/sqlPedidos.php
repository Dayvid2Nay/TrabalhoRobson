<?php 

class Bd extends PDO{
    private $coon;

    public function __construct(){
        $this->conn = new PDO("mysql:dbname=pizzaria;host=localhost","root","123456789");
    }

    public function buscarPedidos(){
        $stmt = $this->conn->prepare("SELECT * FROM Pedidos");

        $stmt->execute();

        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }

    public function buscarPedido($id){
        $stmt = $this->conn->prepare("SELECT * FROM Pedidos WHERE idPedido=:ID");
        $stmt->bindParam(":ID",$id);
        $stmt->execute();

        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }


    public function inserirPedido($data, $valor){
        $stmt = $this->conn->prepare("INSERT INTO Pedidos(data, valor) VALUES (:DATA, :VALOR)");

        $stmt->bindParam(":DATA",$data);
        $stmt->bindParam(":VALOR",$valor);
      

        $stmt->execute();
    }
        
   
    public function excluirPedido($id){
        $stmt = $this->conn->prepare("DELETE FROM Pedidos WHERE idPedido=:ID");
        $stmt->bindParam(":ID",$id);
        $stmt->execute();

    }
    public function editarPedido($id, $data, $valor){
        $stmt = $this->conn->prepare("UPDATE Pedidos SET data=:DATA , valor = :VALOR WHERE idPedido = :ID");

        $stmt->bindParam(":ID",$id);
        $stmt->bindParam(":DATA",$data);
        $stmt->bindParam(":VALOR",$valor);


        $stmt->execute();
    }
    


    
}


 ?>

