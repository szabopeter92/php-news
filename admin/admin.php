<?php


require "../class/Login.php";

$login = new Login();

$error = "";


if (isset($_POST["login"])) {


    $username = $_POST["username"];
    $password = sha1($_POST["password"]);

    try {
        $login->login($username, $password);
        session_start();
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Admin - Login</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="mx-auto w-75 rounded p-5 border shadow-sm text-center">
            <h1>Admin Login</h1>
            <div class="my-2">
                <p class="text-danger"><?php if (!empty($error)) {
                                            echo $error;
                                        } ?></p>
                <label class="form-label">Felhasználónév</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="my-2">
                <label class="form-label">Jelszó</label>
                <input type="password" name="password" class="form-control">
            </div>

            <button class="btn btn-success" name="login">Bejelentkezés</button>
        </form>
    </div>
</body>

</html>