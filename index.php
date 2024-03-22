<?php
require "class/Sql.php";

$sql = new Sql();

$news = $sql->getNews();

if (isset($_POST['search'])) {
    $title = $_POST['title'];
    $news = $sql->searchNews($title);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Hammer News</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Hammer News</a>
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

    <div class="container">
        <h1>Hammer News</h1>

        <form action="" method="POST" class="w-100">
            <input type="text" name="title" placeholder="Hírek keresése..." class="form-control my-2">
            <button class="btn btn-primary" name="search">Keresés</button>
        </form>

        <div class="row mt-5">
            <?php foreach ($news as $single_news) : ?>
                <div class="col-12 bg-secondary rounded p-3 text-white mb-3">
                    <h3><?php echo $single_news['title'];  ?></h3>
                    <p> <strong>Létrehozva: <?php echo $single_news['date'];  ?> | Szerző: <?php echo $single_news['author']; ?></strong> </p>
                    <hr>
                    <p><?php echo $single_news['intro'];  ?></p>
                    <a href="news.php?id=<?php echo $single_news['id']; ?>" class="text-white">Tovább &rarr;</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>
