<?php
session_start();
if (isset($_SESSION['user'])){
    header('Location: profile.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assts/css/main.css">
</head>
<body>
<!--форма авторизации-->
<form action="vendor/signin.php" method="post">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <button type="submit" >Войти</button>
    <p>
         у вас нет аккаунта ? - <a href="registr.php">зарегистрируйтесь</a>
    </p>
    <?php
    if(isset($_SESSION['message'])){
        echo '<p class="msg">' . $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);
    ?>
</form>
</body>
</html>

