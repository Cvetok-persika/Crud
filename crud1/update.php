<?php
 require 'connect.php';

 $sql = 'UPDATE posts SET title = :title, content = :content WHERE id = :id';
 $statement = $pdo->prepare($sql);
 $statement->execute($_POST);
 header('Location: ./index.php');

