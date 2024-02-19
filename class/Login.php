<?php
require "Sql.php";

class Login extends Sql
{

    public $sql;

    public function __construct()
    {

        $this->sql = new Sql();
    }

    public function login($user, $pwd)
    {

        $data = $this->sql->login($user, $pwd);

        if ($data) {

            header("Location: admin_index.php");
        } else {

            throw new Exception("Hibás belépési adat(ok)!");
        }
    }
}
