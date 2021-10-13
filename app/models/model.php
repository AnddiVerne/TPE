<?php

require_once('config.php');     

class Model {
    
    protected $pdo;

    public function __construct()
    {
        $this->conectar();
    }

    /* Recibe los parametros  */
    private function conectar() {
        global $param;
        $host = $param['host'];
        $port = $param['port'];;
        $db = $param['db'];
        $user = $param['user'];
        $password = $param['password'];
        $dsn = "mysql:host=$host:$port;dbname=$db;charset=UTF8";

        try {       /* viendo En la clase de MVC */
            $this->pdo = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>