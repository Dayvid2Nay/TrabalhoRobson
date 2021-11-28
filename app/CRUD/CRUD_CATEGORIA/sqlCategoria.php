<?php 

class Bd extends PDO{
    private $coon;

    public function __construct(){
        $this->conn = new PDO("mysql:dbname=pizzaria;host=localhost","root","123456789");
    }

    public function buscarCategorias(){
        $stmt = $this->conn->prepare("SELECT * FROM categoria");

        $stmt->execute();

        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }

    public function buscarCategoria($id){
        $stmt = $this->conn->prepare("SELECT * FROM categoria WHERE idCategoria=:ID");
        $stmt->bindParam(":ID",$id);
        $stmt->execute();

        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }


    public function inserirCategoria($nome){
        $stmt = $this->conn->prepare("INSERT INTO categoria(nome) VALUES (:NOME)");

        $stmt->bindParam(":NOME",$nome);

        $stmt->execute();
    }
        
   
    public function excluirCategoria($id){
        $stmt = $this->conn->prepare("DELETE FROM categoria WHERE idCategoria=:ID");
        $stmt->bindParam(":ID",$id);
        $stmt->execute();

    }
    public function editarCategoria($id,$nome){
        $stmt = $this->conn->prepare("UPDATE categoria SET nome=:NOME WHERE idCategoria = :ID");

        $stmt->bindParam(":ID",$id);
        $stmt->bindParam(":NOME",$nome);
        

        $stmt->execute();
    }
    


    
}


 ?>

