<?php

class Database
{

    //Attribútumok felvétele (osztályváltozók)
    public $host;
    public $user;
    public $pwd;
    public $dbname;

    public function __construct()
    {


        $this->host = "localhost";
        $this->user = "root";
        $this->pwd = "";
        $this->dbname = "c9_test009";
    }

    public function connect()
    {

        $con = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pwd);
        $con->exec("SET NAMES utf8");

        return $con;
    }
}
