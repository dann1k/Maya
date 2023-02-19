<?php 
$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];
$password = md5($password);
$mysql = new mysqli('localhost', 'root', 'root', 'register-maya');
$mysql->query("INSERT INTO `users` (`name`, `login`, `password`) 
VALUES('$name','$login','$password')");
$mysql->close();
header('Location: /')
?>
