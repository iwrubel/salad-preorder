<!DOCTYPE html>

<!-- Template by quackit.com -->
<html>

<head>

    <link rel="stylesheet" type="text/css" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
        <body>
       
       <?php
       
       session_start();
       
       
       
       $time = time();
       $late = mktime( 10, 30, 0 ); // 10 30
       $early = mktime( 1, 0, 0 );
       
       
       if( true || $early < $time && $time < $late ) {
           print <<<END
       
        <header id="header">
            <p><b>Got Salad?</b></header>
            <p id="subtext">Pre-order your Head-Royce salad here.</p>
            </p>
        </header>

        <div id="container">
            <main id="center" class="column">
                <article>
                    <div id="startertext"> If you'd like to pre-order a salad for <b>today's</b> lunch, please<br> fill out the information below then press "Next." </div>
                    <br>
                    <form action ='Step1.php' method=get>
                        <div class="idinfo.php">
                            <label for="fname"><b>First Name:</b></label>
                            <input name="fname" type="text" class="form-control" id="fname" placeholder="First">
                        </div>
                        <br>
                        <div class="idinfo.php">
                            <label for="lname"><b>Last Name:</b></label>
                            <input name = "lname" type="lname" class="form-control" id="lname" placeholder="Last">
                        </div>
                        <br>
                        <div class="idinfo.php">
                            <label for="cafecode"><b>6-Digit Pin:</b></label>
                            <input name = "cafecode" type="password" class="form-control" id="cafecode" placeholder="Code">
                        </div>
                        <br>
        
                       <input type="submit" value="Next"> 
                        </form>
                        
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
END;
       }
        else {
        print <<<END
             <header id="header">
                <p><b>Got Salad?</b></header>
                 <p id="subtext">Pre-order your Head-Royce salad here.</p>
                </p>
             </header>

            <div id="container">
            <main id="center" class="column">
                <article>
                <div>Sorry, please order inbetween the hours of 1 AM and 10:30 AM</div>
            </main>
            </div>
END;
        }

    ?>


    
    
    <div id="footer-wrapper">
        <footer id="footer"> Made by Bobbi Finklestein and Isabel Wrubel
            <p></p>
        </footer>
    </div>

</body>

</html>