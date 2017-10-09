<!DOCTYPE html>

<!-- Template by quackit.com -->
<?php

	session_start();

if (isset($_GET['cafecode']))
{
	$_SESSION['fname'] = $_GET['fname'];
	$_SESSION['lname'] = $_GET['lname'];
	$_SESSION['cafecode'] = $_GET['cafecode'];
}

else {
header('Location: https://salad-preorder-isabelwrubel.c9users.io/NameID.php');
die();
}

	?>

<html>

<head>

	<link rel="stylesheet" type="text/css" href="index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	
</head>

<body>
	
	<header id="header">
		<p><b>Got Salad?</b></header>
	<p id="subtext">Pre-order your Head-Royce salad here</p>
	</p>

	</header>

	<div id="container">
		<main id="center" class="column">
			<div id="step1">
				<img src="step1.png" height="70" />
				<b>Step One: Choose a Base</b>
			</div>
			<br><br><br>
			

			
			<div id="lettuces">
				<br>
			<p class="text-success"><b>LETTUCE:</b><br> </p>
			
			<form action = "Step2.php" method=get>
				<label for = "baseinfo.php" ></label>
				<label class="checkbox-inline">
				 	<input type="checkbox" name="lettuce[]" id="lettuce" value="Romaine"> Romaine
				</label><br><br>
				<label for = "baseinfo.php" ></label>
				<label class="checkbox-inline">
				  <input type="checkbox" name="lettuce[]" id="lettuce" value="Spring-Mix"> Spring-Mix
				</label><br><br>
				<label for = "baseinfo.php" ></label>
				<label class="checkbox-inline">
				  <input type="checkbox" name="lettuce[]" id="lettuce" value="Kale"> Kale
				</label><br><br>
				<input type="submit" value="Next">
				</div>
				<br> <br>
				
			</form>
			<br>
			<img src="box.png" height="500" align="right" />
			</div>
	
			<div class="containerpage">
				<ul class="pager">
					<div id = "np"> 
					<!--<li class="previous"><a href="NameID.html">Previous</a></li>-->
					<!--<li class="next"><a href="Step2.html">Next</a></li>-->
					</div>
				</ul>
			</div>
			
		</main>

		<nav id="left" class="column">
			<h3></h3>
			<h3></h3>
			<ul>
			</ul>
		</nav>

		<div id="right" class="column">
			<h3></h3>
		</div>	
	</div>
	
	

	<div id="footer-wrapper">
		<footer id="footer"> Made by Bobbi Finklestein and Isabel Wrubel
			<p></p>
		</footer>
	</div>

</body>

</html>