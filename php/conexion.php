<?php 
class Database{
    private $hostname = "localhost";
    private $database = "bd_pagina";
    private $username = "root";
    private $password = "";
    private $charset = "utf8";

    function conectar()
    {
        try{
            $conexion2 = "mysql:host=" . $this->hostname . "; dbname=" . $this->database . "; charset=" . $this->charset;
            $option = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO:: ATTR_EMULATE_PREPARES => false
            ];
            $pdo = new PDO($conexion2, $this->username, $this->password, $option);
            return $pdo;
        }catch(PDOException $e){
            echo 'Error conexion:' . $e->getMessage();
            exit;
        }
    }
}
?>