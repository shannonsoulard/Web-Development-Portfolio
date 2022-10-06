<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Guessing Number Game</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="hashtagicon.png" rel="icon">
  <link href="hashtagicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ComingSoon - v2.1.0
  * Template URL: https://bootstrapmade.com/comingsoon-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center">

      <h1 style="padding-bottom: 20px">The Guessing Number Game</h1>
      <h2 style="text-align: center">Welcome to the Guessing Number Game, here I will think of a number 1-15 and you will try to guess it in the shortest amount of attempts! Don't worry I will give you a slight hint if the number is higher or lower than your most recent guess. The reset button below will give you a new number.</h2>
      <h2 style="text-align: center">I am thinking of a number between <em><strong>1</strong></em> and <em><strong>15</strong></em>. What is the number?</h2>
        
<!-- PHP -->
<?php
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $counter = $_POST["counter"];
            $randNum = $_POST["correctNum"];
            $currNum = $_POST["currentNum"];
            $userGuess = $_POST["num"];
                        if ($randNum == $_POST["num"]) {
                if ($counter === 1) {
                    $attempt = "That was pretty good, it only took you <strong>$counter</strong> attempt!";
                }
                else if ($counter >= 1 && $counter <= 4) {
                    $attempt = "That was pretty good, it only took you <strong>$counter</strong> attempts!";
                }
                else if ($counter >=5 && $counter <= 7) {
                    $attempt = "Not too bad, it only took you <strong>$counter</strong> attempts!";
                } 
                else if ($counter >= 8) {
                    $attempt = "It took you <strong>$counter</strong> attempts! Keep trying!";
                }
                else {
                    $attempt = "Wow, you got it on your <strong>first</strong> attempt! That was amazing!";
                }
                echo "<h3><strong>Correct! That was the number I was thinking of!</strong></h3>
                <p>The correct number is <h2><strong>$randNum</strong></h2> $attempt
                <em>Reset to get a new random number!</em></p>";
            }
                
            else {
                $counter++;
                if ($randNum < $userGuess) {
                     echo "<p>The number I am thinking of is <strong>lower</strong> than your guess. Try Again!</p>";    
                }
                else if ($randNum > $userGuess) {
                    echo "<p>The number I am thinking of is <strong>higher</strong> than your guess. Try Again!</p>";
                }
                echo "<h4>Attempts: $counter</h4><p>Keep Trying!</p>";
            }          
        } 
        else { 
            $counter = 0;
            $currNum = rand(1, 15);
            $randNum = rand(1, $currNum);  
            //echo "<p><i>I'm thinking of a number between <b>1</b> and <b>$random2Num</b>. What number is it?</i></p>";
            }

    ?>
<!-- PHP end --> 
        
        <form method="post" action="index.php">
        <div class="row" class="col-12 mx-auto">
        <div class="mx-auto text-center h3">
        <label for="num">Guess a Number</label>
        <input name="num" type="number" min="1" max="15" <?= htmlentities($currNum)?>autofocus required>
        <input type="hidden" name="correctNum" value="<?= htmlentities($randNum)?>"> 
        <input type="hidden" name="currentNum" value="<?= htmlentities($currNum)?>"> 
        <input type="hidden" name="counter" value="<?= htmlentities($counter)?>">  
        </div>
        </div>
        <div class="row" class="col-12 mx-auto">
        <div class="mx-auto text-center h3">
        <input type="submit" class="btn btn-outline-light" value="Guess">
        <input type="submit" class="btn btn-outline-light" value="Reset" onclick="window.location.href = 'http://lamp.cse.fau.edu/~ssoulard2018/p5/index.php'">
        </div>
        </div>
        </form>
      </div>
  </header><!-- End #header -->

  <main id="main">
      
    <section id="contact" class="contact">
      <div style="padding: 100px"></div>
    </section>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        Copyright &copy; 2021 <strong>Shannon Soulard</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/comingsoon-free-html-bootstrap-template/ -->
        Template courtsey of <a href="https://bootstrapmade.com/">bootstrapmade.com</a>
      </div>
    </div>
  </footer><!-- End #footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-countdown/jquery.countdown.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>