<?php 
$login = $_POST['login'];
$password = $_POST['password'];
$password = md5($password);

$mysql = new mysqli('localhost', 'root', 'root', 'register-maya');

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
$user = $result->fetch_assoc();
if(count($user) == 0) {
	echo "Такой пользователь не найден, проверь логин крошка";
	exit();
}
setcookie('user', $user['name'], time() + 3600, "/");

$mysql->close();

header('Location: /');
 ?>
