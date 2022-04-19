<?php

class Conexion{

    private $link;
    private $PDOStatement;

    public function conectar(){

        $this->link= new PDO("mysql:host=localhost;dbname=bdpscinp", "root", "");

        $this->link->exec("set names utf8");
    }

    public function obtenerDatos () {
        $this->PDOStatement = $this->link->query("SELECT * FROM  where ");
        $data = $this->PDOStatement->fetchAll();
        echo("<pre>");
        print_r($data);
        echo("</pre>");
    }

}
