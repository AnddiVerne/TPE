<?php
require_once("app/models/model.php");

class UserModel extends Model
{
    public function CrearCuenta($email, $password, $nombre, $apellido, $direccion, $telefono)
    {
        $query = $this->pdo->prepare("INSERT INTO `usuarios` (`email`, `nombre`, `apellido`, `direccion`, `telefono`) VALUES (NULL,?,?,?,?,?,?);");
        $query->execute([$email, $password, $nombre, $apellido, $direccion, $telefono]);
        return $this->pdo->lastInsertId();
    }
    function getUser($nick)
    {
        $query = $this->pdo->prepare('SELECT * FROM usuarios WHERE nombre_acc = ?');
        $query->execute([$nick]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }
}
