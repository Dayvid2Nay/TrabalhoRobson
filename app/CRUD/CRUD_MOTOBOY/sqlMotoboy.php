<?php 

class Bd extends PDO{
    private $coon;

    public function __construct(){
        $this->conn = new PDO("mysql:dbname=pizzaria;host=localhost","root","");
    }

    public function buscarMotoboys(){
        $stmt = $this->conn->prepare("SELECT * FROM motoboy");

        $stmt->execute();

        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }

    public function buscarMotoboy($id){
        $stmt = $this->conn->prepare("SELECT * FROM motoboy WHERE idMotoboy=:ID");
        $stmt->bindParam(":ID",$id);
        $stmt->execute();

        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }


    public function inserirMotoboy($nome, $cpf, $telefone){
        $stmt = $this->conn->prepare("INSERT INTO motoboy(nome, cpf, telefone) VALUES (:NOME, :CPF, :TELEFONE)");

        $stmt->bindParam(":NOME",$nome);
        $stmt->bindParam(":CPF",$cpf);
        $stmt->bindParam(":TELEFONE",$telefone);

        $stmt->execute();
    }
        
   
    public function excluirMotoboy($id){
        $stmt = $this->conn->prepare("DELETE FROM motoboy WHERE idMotoboy=:ID");
        $stmt->bindParam(":ID",$id);
        $stmt->execute();

    }
    public function editarMotoboy($id,$nome, $cpf, $telefone){
        $stmt = $this->conn->prepare("UPDATE motoboy SET nome=:NOME , cpf = :CPF, telefone = :TELEFONE WHERE idMotoboy = :ID");

        $stmt->bindParam(":ID",$id);
        $stmt->bindParam(":NOME",$nome);
        $stmt->bindParam(":CPF",$cpf);
        $stmt->bindParam(":TELEFONE",$telefone);


        $stmt->execute();
    }
    


    
}


 ?>

