<!doctype html>
<html lang="ru">
	<head>
		<title>Дорогой дневник</title>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	</head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="auth_reg/css/style.css" />
	<body> 
		<div class="container mt-3">
			<?php
				if($_COOKIE['user'] == ''):
			?>
			<div class="row">
				<div class="col">
					<h1>Регистрация!!</h1>
						<form action="auth_reg/validation/check.php" method="post">
							<p>Введите имя</p>
							<input type="text" class="form-control" name="name" id="name" placeholder="Насть, ну формальность">
							<p>Введите логин</p>
							<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин">
							<p>Введите пароль</p>
							<input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль">
							<br>
							<button class="btn btn-success" type="submit">Создать страничку</button>
						</form>
				</div>
										<div class="col">
						<h1>Заходи!!!</h1>
						<form class="auth" action="auth_reg/validation/auth.php" method="post">
							<p>Введите логин</p>
							<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин">
							<p>Введите пароль</p>
							<input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль">
							<br>
							<button class="btn btn-success" type="submit">Вхожу!</button>
						</form>
						</div>
						<?php else: ?>
						<p >Я пока не умею делать редирект, нажми <a href="main/index.html">здесь</a>, чтобы попасть в свой дневник</p>
						<p style="line-height: 0, background-color: deepskyblue">Также ты можешь <a href="exit.php">выйти</a>(пока выхода нет)</p>
						<?php endif;?>
			</div>
		</div>
	</body>
</html>	