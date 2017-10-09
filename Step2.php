<!DOCTYPE html>

<!-- Template by quackit.com -->
<html>

<?php
	 
	session_start();
	
	if (isset($_GET['lettuce']))
	{
		$_SESSION['lettuce'] = $_GET['lettuce'];
	}
	
	else {
	header('Location: https://salad-preorder-isabelwrubel.c9users.io/Step1.php');
	die();
	}
	?>
<head>

	<link rel="stylesheet" type="text/css" href="index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>



<body>

	<header id="header">
		<p><b>Got Salad?</b></header>
	<p id="subtext">Pre-order your Head-Royce salad here</p>
	</p>

	</header>

	<div id="container">

		<main id="center" class="column">
			<article>
				<div id="step2">
					<img src="step2.png" height="70"/>
					<b>Step Two: Choose a Dressing</b>
				</div>
				<br><br><br>
				<div id="sacues">
				<p class="text-success"><b>DRESSING:</b><br> </p><br>
				<form action = "Step3.php" method = get>
 					<input class="checkbox-inline" type="radio" id="dressing" value="Ranch" name = "dressing"> Ranch
					<br><br>
  					<input class="checkbox-inline" type="radio" id="dressing" value="Caesar" name = "dressing"> Caesar
					<br><br>
  					<input class="checkbox-inline" type="radio" id="dressing" value="Baslamic" name = "dressing"> Balsamic  
					<br><br>
  					<input class="checkbox-inline" type="radio" id="dressing" value="Oil & Vinegar" name = "dressing"> Oil & Vinegar  
					<br><br>
	  				<input class="checkbox-inline" type="radio" id="dressing" value="Asian Dressing" name = "dressing"> Asian Dressing 
	  				<br><br>
					<input type="submit" value="Next">
					</div>
				</form>
				<br>
			
			
			<img src="box.png" height="500" align= "right"/>
			

			</article>
			<div class="containerpage">
				<ul class="pager">
					<div id = "np">
					<!--<li class="previous"><a href="Step1.html">Previous</a></li>-->
					<!--<li class="next"><a href="Step3.html">Next</a></li>-->
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