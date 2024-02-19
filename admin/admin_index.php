<?php
session_start();
require "../class/Sql.php";

$sql = new Sql();

$news = $sql->getNews();

if (isset($_POST['logout'])) {
    session_destroy();
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");
    header('Location: ../index.php');
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Admin</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Hammer News - Admin</a>
            <a class="nav-link" href="admin_insert.php">Hír felvétele</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <form action="" method="POST">
                            <button class="btn btn-danger" name="logout">Kijelentkezés</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <table class="table table-striped mx-auto">
            <tr>
                <th>Cím</th>
                <th>Dátum</th>
                <th>Szerző</th>
                <th>Bevezető</th>
                <th>Hír</th>
                <th>Kép</th>
                <th>Műveletek</th>
            </tr>
            <?php foreach ($news as $new) : ?>
                <tr>
                    <td><?php echo $new['title'];  ?></td>
                    <td><?php echo $new['date'];  ?></td>
                    <td><?php echo $new['author'];  ?></td>
                    <td><?php echo $new['intro'];  ?></td>
                    <td><?php echo $new['body'];  ?></td>
                    <td><img src="<?php echo $new['image'];  ?>" alt="" width="100"></td>
                    <td>
                        <a href="admin_edit.php?id=<?php echo $new['id']; ?>" class="btn btn-warning">Szerkesztés</a>
                        <a href="admin_delete.php?id=<?php echo $new['id']; ?>" class="btn btn-danger">Törlés</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>