<?php 
require 'core/init.php';
$general->logged_out_protect();

$user 		= $users->userdata($_SESSION['idStaff']);
$username 	= $user['username'];

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<title>Home</title>
</head>
<body>	
	<div id="container">
		<ul>

			<li><a href="index.php">Home</a></li>
			<li><a href="#">Data Master</a></li>
			<li><a href="#">Transaksi</a></li>
			<li><a href="#">Laporan</a></li>
			<li><a href="#">Tools</a></li>
			<li><a href="logout.php">Logout</a></li>

		</ul>
		<h1>Hello <?php echo $username; ?></h1>
	</div>
</body>
</html>