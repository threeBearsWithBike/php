<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <title>Journal</title>
</head>

<body>
    <h1 class="title">Journal</h1>
    <?php
    if (isset($_GET['login'])) {
        $login = $_GET['login'];
        $pass = $_GET['password'];
        echo "<p class='message'>Ваш логин: $login. Ваш пароль: $pass</p>";
    }
    ?>
    <div class="form-wrapper">
        <form action="./index.php" method="get">
            <label for="#">
                <p>
                    <input type="text" name="login" placeholder="Логин">
                </p>
            </label>
            <label for="#">
                <p>
                    <input type="password" name="password" placeholder="Пароль">
                </p>
            </label>
            <button type="submit">Вход</button>
        </form>
        <p class="remind">Забыли пароль?</p>
    </div>
</body>

</html>