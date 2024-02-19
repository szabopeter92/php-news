<?php
require "Database.php";

class Sql extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getNews()
    {
        $con = parent::connect();
        $res = $con->prepare("SELECT * FROM news ORDER BY id DESC");
        $res->execute();
        $news = $res->fetchAll();

        return $news;
    }

    public function getNewsById($id)
    {
        $con = parent::connect();
        $res = $con->prepare("SELECT * FROM news WHERE id = ?");
        $res->bindValue(1, $id);
        $res->execute();
        $new = $res->fetch();

        return $new;
    }

    public function login($username, $password)
    {
        $con = parent::connect();
        $res = $con->prepare("SELECT username,password FROM users WHERE username = ? AND password = ?");
        $res->bindValue(1, $username);
        $res->bindValue(2, $password);
        $res->execute();
        $user = $res->fetch();

        return $user;
    }

    public function editNewsById($id, $title, $date, $author, $intro, $body, $image)
    {
        $con = parent::connect();
        $res = $con->prepare("UPDATE news SET title = ?, date = ?, author = ?, intro = ?, body = ?, image = ? WHERE id = ?");
        $res->bindValue(1, $title);
        $res->bindValue(2, $date);
        $res->bindValue(3, $author);
        $res->bindValue(4, $intro);
        $res->bindValue(5, $body);
        $res->bindValue(6, $image);
        $res->bindValue(7, $id);
        $res->execute();
    }

    public function insertNews($title, $author, $intro, $body, $image)
    {
        $con = parent::connect();
        $res = $con->prepare("INSERT INTO news (title, author, intro, body, image) VALUES (?, ?, ?, ?, ?)");
        $res->bindValue(1, $title);
        $res->bindValue(2, $author);
        $res->bindValue(3, $intro);
        $res->bindValue(4, $body);
        $res->bindValue(5, $image);
        $res->execute();
    }

    public function deleteNewsById($id)
    {
        $con = parent::connect();
        $res = $con->prepare("DELETE FROM news WHERE id = ?");
        $res->bindValue(1, $id);
        $res->execute();
    }

    public function searchNews($title)
    {
        $con = parent::connect();
        $res = $con->prepare("SELECT * FROM news WHERE title LIKE ?");
        $res->bindValue(1, "%" . $title . "%");
        $res->execute();
        $news = $res->fetchAll();

        return $news;
    }
}
