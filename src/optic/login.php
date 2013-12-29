<?php
require 'core/init.php';
$general->logged_in_protect();

if (empty($_POST) === false) {

	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	if (empty($username) === true || empty($password) === true) {
		$errors[] = 'Maaf, tapi kita perlu username dan password Anda.';
	} else if ($users->user_exists($username) === false) {
		$errors[] = 'Maaf username yang tidak ada.';
	} else if ($users->email_confirmed($username) === false) {
		$errors[] = 'Maaf, tapi Anda perlu untuk mengaktifkan account Anda. 
					 Silakan periksa email Anda.';
	} else {
		if (strlen($password) > 18) {
			$errors[] = 'Sandi harus kurang dari 18 karakter, tanpa spasi.';
		}
		$login = $users->login($username, $password);
		if ($login === false) {
			$errors[] = 'Maaf, username / password tidak valid';
		}else {
			$_SESSION['idStaff'] =  $login;
			header('Location: home.php');
			exit();
		}
	}
} 
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<title>Login</title>
</head>
<body>	
	<div id="container">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
		<h1>Login</h1>

		<?php 

		if(empty($errors) === false){
			echo '<p>' . implode('</p><p>', $errors) . '</p>';	
		}

		?>

		<form method="post" action="">
			<h4>Username:</h4>
			<input type="text" name="username">
			<h4>Password:</h4>
			<input type="password" name="password">
			<br>
			<input type="submit" name="submit">
		</form>


	</div>
</body>
</html>