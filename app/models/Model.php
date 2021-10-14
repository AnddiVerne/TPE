<?php

require_once('config.php');

class Model
{
    protected $pdo;
    public function __construct()
    {
        $this->conection();
    }

    private function conection()
    {
        global $param;
        $host = $param['host'];
        $port = $param['port'];;
        $db = $param['db'];
        $user = $param['user'];
        $password = $param['password'];

        $dsn = "mysql:host=$host:$port;dbname=$db;charset=UTF8";

        try {
            $this->pdo = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}