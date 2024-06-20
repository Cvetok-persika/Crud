<?php
//Нажимаем "редактировать"(получаем ID) <<<<
//Переходим на форму редактирования (в поля подставляются данные по ID SELECT-ом
//Изменим запись
//Нажали сохранить
//Переходим в скрипт обновления
//Выполняем запрос UPDATE
//Переходим на главную страницу
require "connect.php";

    $sql = "SELECT * FROM posts WHERE id=:id";
    $statement = $pdo -> prepare($sql);
    $statement -> execute($_GET);

    $post = $statement -> fetch(Pdo::FETCH_ASSOC);



//$id = $_POST['id'];

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
Добавить пост
</title>
    <meta name="description" content="Chartist.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
    <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
</head>
<body>
<form action="update.php" method="post">
<main id="js-page-content" role="main" class="page-content">
    <p>
        <input type="hidden" name="id" value="<?php echo $post['id'] ?>">
    </p>
<p>
            <input type="text" name="title" value="<?php echo $post['title'] ?>" >
        </p>
        <input type="text" name="content" value="<?php echo $post['content'] ?>">
        <p>
            <button type="submit">Изменить</button>

</p>
</form>
</main>
</body>
</html>

