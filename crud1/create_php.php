<?php



//выполнить его
//перейти на стр просмотра статей


//БД


require 'connect.php';
//Запроc
$sql = 'INSERT INTO posts (`title`, `content`) VALUES (:title, :content)';

//
$statement = $pdo -> prepare($sql);
$statement->execute($_POST);

//
header('Location: ./index.php');
