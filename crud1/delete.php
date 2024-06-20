<?php

require 'connect.php';

$sql = 'DELETE FROM posts WHERE id = :id';
$statement = $pdo->prepare($sql);
$statement->execute($_GET);
header('Location: ./index.php');