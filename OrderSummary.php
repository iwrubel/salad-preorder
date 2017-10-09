<!DOCTYPE html>

<!-- Template by quackit.com -->
<?php

	session_start();
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
    <p id="subtext">Pre-order your Head-Royce salad here.</p>
    </p>

    </header>

    <div id="container">

        <main id="center" class="column">
            <article>
                <div id="startertext">Please press "Submit" to confirm that the information below is <b>correct.</b> <br> </div>
                <br>
                <div id= "closedbox">
                </div>
                <div id = "saladinfo" type = text>
                    <b>First Name:</b> <?php echo $_SESSION['fname'] ?> <br>
                    <b>Last Name:</b> <?php echo $_SESSION['lname'] ?> <br>
                    <b>6-Digit Pin:</b> <?php echo $_SESSION['cafecode'] ?> <br>
                    <b>Base:</b> <?php $name = $_SESSION['lettuce'];
                            
                            foreach ($name as $lettuce){
                                echo $lettuce."     ";
                            }
            
                            ?> <br>
                    <b>Dressing:</b> <?php echo $_SESSION['dressing'] ?> <br>
                    <b>Toppings:</b> <?php
                            $name = $_GET['toppings'];
                            
                            foreach ($name as $toppings){
                            echo $toppings."     ";
                            
                            }
                            
                            // echo "(".count($toppings).")";
                            
                            ?>  <br>
                    <br>
                    <form action = "ordersent.php" method = get>
                    <div>
                    <textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;" placeholder="Write additional comments here."></textarea>
                    <br>
                    <br>
                    <input type="submit" value="Submit">
                    </form>
                   
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