<?php
/* 
Esta archivo crea la conexion a la base de datos
*/

function crearConexion() {
    // Direccion IP o nombre del servidor (normal: localhost):
    $host = 'mysqldb';

    // Direccion del puerto (normal: 3306)
    $port = 3306;
    // Nombre de la base de datos:
    $db = 'andel';
    // Usuario de conexion (normal: root):
    $user = 'root';
    // Password del usuario (normal: nada o root)
    $password = '';

    $dsn = "mysql:host=$host:$port;dbname=$db;charset=UTF8";

    try {
        $pdo = new PDO($dsn, $user, $password);
    
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    return $pdo;
}
