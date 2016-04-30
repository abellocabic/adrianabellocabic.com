<?php

	session_start();
	include "../db/connection.php";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
	
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<title>Dashboard ADMIN</title>

	<link rel=”icon” href=”img/favicon.ico”> 

	<!-- FONTS and ICONS -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">

	<!-- CSS VENDORS -->

	<!-- CSS STYLE -->
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/dashboard.css">


</head>
<body>
	
	<header>
		<div class="headerLeft">
			<h1 class="title">Adriana Bello-Cabic</h1>
			<p class="subtitle">Web Développeuse</p>
		</div>

		<button id="btnMenu" type="button">MENU</button>

		<nav>
			<ul class="navUl">
				<li class="navLi"><a href="../index.html"><i class="fa fa-home"></i>Page d'Accueil</a></li>
			</ul>
		</nav>
	</header>

<!-- === MAIN === -->
	<main>

	<!-- === BIENVENU === -->

	<div class="grand">
		<div class="container">
			<h2>Bonjour <?=$_SESSION['user']['first_name']; ?></h2>
		</div>
	</div>
		



	</main>



	<!-- === FOOTER === -->

	<footer>
			<h1 class="footerH1">Adriana Bello-Cabic</h1>
			<p class="footerP">Web Développeuse</p>
			<a href="tel://33-6-26-37-25-12"><p class="footerP">06 26 37 25 12</p></a> 
			<a href="http://www.adrianabellocabic.com"><p class="footerP">www.adrianabellocabic.com </p></a>
			<a href="login.php"><i class="fa fa-fort-awesome fa-6"></i></a>

	</footer>

	<!-- === SCRIPTS === -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.js"></script>
	<script>window.jQuery || document.write('<script src="../js/vendor/jquery-2.2.2.min.js"><\/script>')</script>

	<script src="../js/plugins.js"></script>
	<script src="../js/main.js"></script>

	
</body>
</html>



