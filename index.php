<?php
//including logic file
require("logic.php");

//assigning variables in order to perform fucntion call
$fwords = isset($_POST["number_of_words"])?$_POST["number_of_words"]:4;
$fnumber = isset($_POST["add_number"]);
$fsymbol = isset($_POST["add_symbol"]);
$fupcase = isset($_POST["uppercase_first"]);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DW15 - Bart Bartosik</title>
    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Keywords -->
	<meta name="keywords" content="Bart Bartosik - Portfolio">
	<meta name="description" content="Web Development Educational content.">
    <!-- site css -->
    <link href='https://fonts.googleapis.com/css?family=Amatic+SC:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/site.min.css">
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <script type="text/javascript" src="js/site.min.js"></script>
  </head>
  <body class="home">
  <!--nav-->

  <nav class="navbar navbar-default navbar-custom" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="images/logo1.jpg" alt="Logo" height="40" class="mobile-logo"></a>
          </div>
        </div>
  </nav>
  <!-- nav ends -->
  
 <!-- forms -->
 <div id="learn-more" class="container documents">
    <div class="example">
      <div class="row">

    <div class='container'>
    <h1>xkcd Password Generator</h1>
    <h2>The button below will generate a random phrase consisting of four common words. According to xkcd strip, 
    such phrases are hard to guess (even by brute force), but easy to remember, making them interesting password choices.</h2>
  
    <p class='password'>
      <?php echo create_password($fwords, $fnumber, $fsymbol, $fupcase); ?></p>
    
    <form action="<?=$_SERVER['PHP_SELF']?>" method='POST'>
      <p class='options'>
      
        <label for='number_of_words'># of Words</label>
        <input maxlength=1 type='text' name='number_of_words' id='number_of_words' value='<?=$fwords?>' />  (Max 9)
        <br>
          
        <input type='checkbox' name='add_number' id='add_number'<?php if($fnumber) echo 'checked="checked"'; ?> /> 
        <label for='add_number'>Add a number</label>
        <br>
        <input type='checkbox' name='add_symbol' id='add_symbol' <?php if($fsymbol) echo 'checked="checked"'; ?> /> 
        <label for='add_symbol'>Add a symbol</label>
        <br>
        <input type='checkbox' name='uppercase_first' id='uppercase_first' <?php if($fupcase) echo 'checked="checked"'; ?> /> 
        <label for='uppercase_first'>Capitalize the first letter</label>
      </p>
    
      <input type='submit' class='btn btn-default' value='Gimme Another'>
          
    </form>
    
    <p class='details'>
      <a href='http://xkcd.com/936/'>xkcd password strength</a><br>
    
      <a href='http://xkcd.com/936/'>
        <img class='comic' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
      </a>
      <br>
    </p>
      
  </div>
  </div>
  </div>
  </div>
<!-- Forms -->


<!-- Footer -->
<footer>
<div class="footer">
    <div class="container">
        <div class="clearfix">
            <div class="footer-logo"><a href="#"><img src="images/logo2.jpg" class="mobile-logofooter" alt="logo"></a></div>
                <dl class="footer-nav">
                    <dt class="nav-title">Wordpress</dt>
                    <dd class="nav-item"><a href="http://wordpress.org">Wordpress.org</a></dd>
                    <dd class="nav-item"><a href="https://codex.wordpress.org/">Documentation</a></dd>
                    <dd class="nav-item"><a href="http://themeforest.net/">Themes</a></dd>
                    <dd class="nav-item"><a href="http://themeforest.net/">Plug-Ins</a></dd>
                </dl>
                <dl class="footer-nav">
                    <dt class="nav-title">Square Space</dt>
                    <dd class="nav-item"><a href="http://www.squarespace.com/">Login</a></dd>
                    <dd class="nav-item"><a href="http://www.squarespace.com/templates/">Templates</a></dd>
                    <dd class="nav-item"><a href="http://developers.squarespace.com/">Developers</a></dd>
                </dl>
                <dl class="footer-nav">
                    <dt class="nav-title">HTML5</dt>
                    <dd class="nav-item"><a href="http://www.w3schools.com/html/html5_intro.asp">W3Schools</a></dd>
                    <dd class="nav-item"><a href="https://validator.w3.org/">Validator</a></dd>
                    <dd class="nav-item"><a href="http://www.w3schools.com/tags/">Refrence</a></dd>
                </dl>
                <dl class="footer-nav">
                    <dt class="nav-title">CSS3</dt>
                    <dd class="nav-item"><a href="http://www.w3schools.com/css/css3_intro.asp">W3Schools</a></dd>
                    <dd class="nav-item"><a href="https://jigsaw.w3.org/css-validator/">Validator</a></dd>
                    <dd class="nav-item"><a href="http://www.w3schools.com/cssref/">Refrence</a></dd>
                    <dd class="nav-item"><a href="http://sass-lang.com/">SASS</a></dd>
                </dl>
                </div>
                <div class="footer-copyright text-center">Copyright ©Dw15 2015. All rights reserved.</div>
    </div>
</div>
</footer>
</body>
</html>