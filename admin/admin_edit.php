<?php
require "../class/Sql.php";

$sql = new Sql();

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $new = $sql->getNewsById($id);

    if (isset($_POST['edit'])) {

        $title = $_POST['title'];
        $date = $_POST['date'];
        $author = $_POST['author'];
        $intro = $_POST['intro'];
        $body = $_POST['body'];
        $image = $_POST['image'];

        $sql->editNewsById($id, $title, $date, $author, $intro, $body, $image);

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
    <title>Admin - Edit</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="admin_index.php">Hammer News - Admin</a>
        </div>
    </nav>
    <div class="container">
        <form action="" method="POST" class="mx-auto w-75 text-center p-5 rounded shadow-sm">
            <h2 class="mb-3">Admin - Szerkesztés</h2>
            <div class="my-2">
                <input class="form-control" type="text" name="title" value="<?php echo $new['title']; ?>">
            </div>
            <div class="my-2">
                <input class="form-control" type="text" name="date" value="<?php echo $new['date']; ?>">
            </div>
            <div class="my-2">
                <input class="form-control" type="text" name="author" value="<?php echo $new['author']; ?>">
            </div>
            <div class="my-2">
                <input class="form-control" type="text" name="intro" value="<?php echo $new['intro']; ?>">
            </div>
            <div class="my-2">
                <textarea name="body" cols="30" rows="15" class="form-control"> <?php echo $new['body']; ?></textarea>
            </div>
            <div class="my-2">
                <input class="form-control" type="text" name="image" value="<?php echo $new['image']; ?>">
            </div>
            <button name="edit" class="btn btn-warning">Szerkesztés</button>
        </form>
    </div>



</body>

</html>