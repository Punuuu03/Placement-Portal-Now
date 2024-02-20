<?php

session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Index</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="container">
        <h1>Home</h1>
        <?php if (isset($user)) : ?>

            <p>Hello <?= htmlspecialchars($user["name"]) ?></p>

            <p>WELCOME TO PLACEMENT PORTAL</p>

            <p><button><a href="home.php">Start</a></button></p>

        <?php else : ?>
            <p><button><a href="login.php">Log in</a></button> or <button><a href="signup.html">sign up</a></button></p>
        <?php endif; ?>
    </div>
</body>

</html>