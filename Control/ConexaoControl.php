<?php
class Conexao{
    static function conectar(){
        $servername = "localhost";
        $username = "root";
        $password = "bancodedados";
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=temperatura", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            echo "Erro ao estabelecer conexão: " . $e->getMessage();
        }
        
        return $conn;
    }

}
