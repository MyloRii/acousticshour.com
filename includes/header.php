<?php
	include('includes/arrays.php');
?>

<!DOCTYPE html>
<html>	
	<head>
		<meta charset="utf-8">
		<title><?php echo TITLE; ?></title>
		<link rel="stylesheet" href="css/normalize.css">
		<link href='https://fonts.googleapis.com/css?family=Ek+Mukta:400,200,300,500' rel='stylesheet' type='text/css'>
                <link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/responsive.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div id="general">
			<div id="header">
				<div class="wrapper">
					<header>
						<a href="index.php" id="logo">
							<img src="icons/Logo.svg" width="81" height="66" alt="Logo">
							<h1>Acoustics Hour</h1>
							<h2>Free online guitar video tutorials</h2>
						</a>
						<nav>
							<ul>
								<?php include('includes/nav.php'); ?>
							</ul>
						</nav>
					</header>
				</div>
			</div>