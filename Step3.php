<!DOCTYPE html>

<!-- Template by quackit.com -->
<html>


<?php
	 
	session_start();
	
	if (isset($_GET['dressing']))
	{
		$_SESSION['dressing'] = $_GET['dressing'];
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
				<div id="step3">
					<img src="step3.png" height="70" />
					<b>Step Three: Choose Toppings</b>
					<div id="step3subtext">5 toppings included. <br> +$0.25 per additional topping. </div>
				</div>
				<br>
				
				
				<div id="toppings">
					<form action = "OrderSummary.php" method = get>
						<p class="text-success"><b>PROTEIN</b><br> </p>
						
					<label class="checkbox-inline">
 					 <input type="checkbox" name="toppings[]" id="toppings" value="Chicken (+ $1.00)"> Chicken (+ $1.00)
						</label><br>
					<label class="checkbox-inline">
  					<input type="checkbox" name="toppings[]" id="toppings" value="Tofu"> Tofu
					</label><br>
						<label class="checkbox-inline">
  					<input type="checkbox" name="toppings[]" id="toppings" value="Egg"> Egg 
					</label><br>
					<label class="checkbox-inline">
  					<input type="checkbox" name="toppings[]" id="toppings" value="Bacon"> Bacon 
					</label><br>
					<label class="checkbox-inline">
  					<input type="checkbox" name="toppings[]" id="toppings" value="Cheese"> Cheese
					</label> <br>

					
					<br>

						<p class="text-success"> <b>VEGGIES</b><br> </p>
						<label class="checkbox-inline">
 					 	<input type="checkbox" name="toppings[]" id="toppings" value="Edamame"> Edamame
						</label><br>
						<label class="checkbox-inline">
  				<input type="checkbox" name="toppings[]" id="toppings" value="Bell-Peppers"> Bell Peppers
					</label><br>
						<label class="checkbox-inline">
  					<input type="checkbox" name="toppings[]" id="toppings" value="Cucumbers"> Cucumbers
					</label><br>
						<label class="checkbox-inline">
  					<input type="checkbox" name="toppings[]" id="toppings" value="Tomatoes"> Tomatoes
					</label><br>
						<label class="checkbox-inline">
  					<input type="checkbox" name="toppings[]" id="toppings" value="Carrots"> Carrots
					</label><br>

					<br>

						<p class="text-success"><b>CRUNCH</b><br> </p>
						<label class="checkbox-inline">
 					 <input type="checkbox" name="toppings[]" id="toppings" value="Wonton-Strips"> Wonton Strips
						</label> <br>
						<label class="checkbox-inline">
  					<input type="checkbox" name="toppings[]" id="toppings" value="Croutons"> Croutons
					</label> <br>
						<label class="checkbox-inline">
  					<input type="checkbox" name="toppings[]" id="toppings" value="Sunflower-Seeds"> Sunflower Seeds
					</label> <br>
					<label class="checkbox-inline">
  					<input type="checkbox" name="toppings[]" id="toppings" value="Craisins"> Craisins
					</label> <br>
					<br>
					<input type="Submit" name="formSubmit" value="Next"/>
						</div>
					</form>
					<br>
					
					<img src="box.png" height="500" align= "right"/>

	
			</article>
			<div class="containerpage">
				<ul class="pager">
						<div id = "np2">
					<!--<li class="previous"><a href="Step2.html">Previous</a></li>-->
				
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