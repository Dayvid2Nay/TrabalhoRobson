<?php 

class Bd extends PDO{
    private $coon;

    public function __construct(){
        $this->conn = new PDO("mysql:dbname=pizzaria;host=localhost","root","123456789");
    }

    public function buscarUsuarios(){
        $stmt = $this->conn->prepare("SELECT * FROM Usuarios");

        $stmt->execute();

        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }

    public function buscarUsuario($id){
        $stmt = $this->conn->prepare("SELECT * FROM Usuarios WHERE idPessoa=:ID");
        $stmt->bindParam(":ID",$id);
        $stmt->execute();

        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }

    public function buscarUsuarioEmail($email){
        $stmt = $this->conn->prepare("SELECT * FROM Usuarios WHERE email=:EMAIL");
        $stmt->bindParam(":EMAIL",$email);
        $stmt->execute();

        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }


    public function inserirUsuario($nome, $email, $senha, $tipo){
        $stmt = $this->conn->prepare("INSERT INTO Usuarios(nome, email, senha, tipo) VALUES (:NOME, :EMAIL, :SENHA, :TIPO)");

        $stmt->bindParam(":NOME",$nome);
        $stmt->bindParam(":EMAIL",$email);
        $stmt->bindParam(":SENHA",$senha);
        $stmt->bindParam(":TIPO",$tipo);

        $stmt->execute();
    }
        
   
    public function excluirUsuario($id){
        $stmt = $this->conn->prepare("DELETE FROM Usuarios WHERE idPessoa=:ID");
        $stmt->bindParam(":ID",$id);
        $stmt->execute();

    }
    public function editarUsuario($id,$nome, $email, $senha, $tipo){
        $stmt = $this->conn->prepare("UPDATE Usuarios SET nome=:NOME , email = :EMAIL, senha = :SENHA, tipo =:TIPO WHERE idPessoa = :ID");

        $stmt->bindParam(":ID",$id);
        $stmt->bindParam(":NOME",$nome);
        $stmt->bindParam(":EMAIL",$email);
        $stmt->bindParam(":SENHA",$senha);
        $stmt->bindParam(":TIPO",$tipo);

        $stmt->execute();
    }
    


    
}


 ?>

