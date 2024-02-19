<?php
require "../class/Sql.php";

$sql = new Sql();

$error = "";

if (isset($_POST['insert'])) {

    $title = $_POST['title'];
    $author = $_POST['author'];
    $intro = $_POST['intro'];
    $body = $_POST['body'];
    $image = $_POST['image'];

    if (empty($title) ||  empty($author) || empty($intro) || empty($body) || empty($image)) {
        $error = "Minden mező kitöltése kötelező!";
    } else {
        $sql->insertNews($title, $author, $intro, $body, $image);

        header("Location: admin_index.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Admin - Hír felvétele</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="admin_index.php">Hammer News - Admin</a>
        </div>
    </nav>
    <div class="container">
        <form action="" method="POST" class="mx-auto w-75 text-center p-5 rounded shadow-sm">
            <h2 class="mb-3">Admin - Hír felvétele</h2>
            <p class="text-danger"><?php if (!empty($error)) {
                                        echo $error;
                                    } ?></p>
            <div class="my-2">
                <input class="form-control" type="text" name="title" placeholder="Cím">
            </div>
            <div class="my-2">
                <input class="form-control" type="text" name="author" placeholder="Szerző">
            </div>
            <div class="my-2">
                <input class="form-control" type="text" name="intro" placeholder="Bevezető">
            </div>
            <div class="my-2">
                <textarea name="body" cols="30" rows="15" class="form-control" placeholder="Hír"></textarea>
            </div>
            <div class="my-2">
                <input class="form-control" type="text" name="image" placeholder="Kép">
            </div>
            <button name="insert" class="btn btn-primary">Hír felvétele</button>
        </form>
    </div>

</body>

</html>