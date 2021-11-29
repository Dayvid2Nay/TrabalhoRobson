<?php 

class Bd extends PDO{
    private $coon;

    public function __construct(){
        $this->conn = new PDO("mysql:dbname=pizzaria;host=localhost","root","123456789");
    }

    public function buscarProdutos(){
        $stmt = $this->conn->prepare("SELECT * FROM Produtos");

        $stmt->execute();

        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }
    public function buscarProduto($id){
        $stmt = $this->conn->prepare("SELECT * FROM produtos WHERE idProduto=:ID");
        $stmt->bindParam(":ID",$id);
        $stmt->execute();

        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }

    public function inserirProduto($quantidade, $descricao, $preco,$nome){
        $stmt = $this->conn->prepare("INSERT INTO Produtos(quantidade, descricao, preco,nome) VALUES (:QUANTIDADE, :DESCRICAO, :PRECO,:NOME)");
        //$stmt = $this->conn->prepare("INSERT into categoria(nome) values(:NOME)");

        $stmt->bindParam(":QUANTIDADE",$quantidade);
        $stmt->bindParam(":DESCRICAO",$descricao);
        $stmt->bindParam(":PRECO",$preco);
        $stmt->bindParam(":NOME",$nome);

        $stmt->execute();
    }
    public function excluirProduto($id){
        $stmt = $this->conn->prepare("DELETE FROM Produtos WHERE idProduto=:ID");
        //$stmt = $this->conn->prepare("DELETE FROM categoria WHERE idCategoria=:ID");
        $stmt->bindParam(":ID",$id);
        $stmt->execute();

    }
    public function editarProduto($id,$quantidade, $descricao, $preco,$nome){
        $stmt = $this->conn->prepare("UPDATE Produtos SET quantidade=:QUANTIDADE , descricao = :DESCRICAO, preco = :PRECO, nome = :NOME WHERE idproduto = :ID");

        $stmt->bindParam(":ID",$id);
        $stmt->bindParam(":QUANTIDADE",$quantidade);
        $stmt->bindParam(":DESCRICAO",$descricao);
        $stmt->bindParam(":PRECO",$preco);
        $stmt->bindParam(":NOME",$nome);

        $stmt->execute();
    }


    
}


 ?>

