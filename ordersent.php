<!DOCTYPE html>

<!-- Template by quackit.com -->

<?php


require "sendgrid-php-2/sendgrid-php.php";

$from = new SendGrid\Email(null, "hrssalad@gmail.com");
$subject = "Hello World from the SendGrid PHP Library! WHOAHHH";
$to = new SendGrid\Email(null, "bearlyfink@gmail.com");
$content = new SendGrid\Content("text/plain", "Hello, Email!");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('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');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();

?>

<html>

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
				<div id="final">
					<b>You're order has been sent!</b>
					<div id="step3subtext">You can pick your salad up at the salad bar (located in the cafeteria) during lunch.
					</div>
				</div>
				<div id="closedbox">
					<img src="Salad.png" height="300" />
				</div>
				<div id = "signature">
					<?php echo $_SESSION['fname'] ?> 
				</div>

			</article>
			<div class="containerpage">
				<ul class="pager">
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