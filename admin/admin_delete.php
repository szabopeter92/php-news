<?php
require "../class/Sql.php";

$sql = new Sql();

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['delete'])) {

        $sql->deleteNewsById($id);

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
    <title>Admin - Törlés</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="admin_index.php">Hammer News - Admin</a>
        </div>
    </nav>
    <div class="container">
        <form action="" method="POST" class="mx-auto w-75 text-center p-5 rounded shadow-sm">
            <h2 class="mb-3">Admin - Törlés</h2>
            <p>Biztosan törölni szeretné ezt a hírt?</p>
            <div class="my-2">
                <button type="submit" name="delete" class="btn btn-danger">Igen</button>
                <a href="admin_index.php" class="btn btn-secondary">Nem</a>
            </div>
        </form>
    </div>
</body>



</html>