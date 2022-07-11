<?php
class Conexao{
    static function conectar(){
        $servername = "localhost";
        $username = "root";
        $password = "bancodedados";
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=leituras", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conexão estabelecida com sucesso!";
        }
        catch(PDOException $e){
            echo "Erro ao estabelecer conexão: " . $e->getMessage();
        }
        
        return $conn;
    }

}
