<?php
$connect = mysqli_connect('localhost','root','','test');

if(!$connect){
    die('Error connecting to database');
}