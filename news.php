<?php
require "class/Sql.php";

$sql = new Sql();

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $news = $sql->getNewsById($id);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Hammer News</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="admin/admin.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 border rounded p-5">
                <h1><?php echo $news['title']; ?></h1>
                <p> <strong>Létrehozva: <?php echo $news['date'];  ?> | Szerző: <?php echo $news['author']; ?></strong> </p>
                <hr>
                <p><?php echo $news['intro']; ?></p>
                <img src="<?php echo $news['image']; ?>" alt="<?php echo $news['title'];  ?>" class="my-3" />
                <p class="text-justify"><?php echo $news['body']; ?></p>
            </div>
        </div>

    </div>

</body>

</html>