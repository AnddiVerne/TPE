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
    
    function getUsuario($email)
    {
        $sql ="SELECT * FROM usuarios WHERE email = ?";

        $stm = $this->pdo->prepare($sql);

        $stm->execute([$email]);

        $usuario = $stm->fetch(PDO::FETCH_OBJ);
        return $usuario;
    }
}
