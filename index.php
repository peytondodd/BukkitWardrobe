<?php
  // Include functions
  require_once("functions.inc.php");

  // Check for _GET
  if (isset($_GET['ign'])) {
    $username = $_GET['ign'];
  }
  if (isset($_GET['clothing'])) {
    $clothing = $_GET['clothing'];
  }

  // Check if "download" mode
  if (isset($_GET['mode']) && $_GET['mode'] == "download"){
    skin($username, $clothing, true);
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/favicon.ico">

    <title>YEAHWHAT?! Skingenerator</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
  </head>

  <body role="document">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://yeahwh.at">YEAHWHAT?!</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Skingenerator</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>YEAHWHAT?! Skingenerator!</h1>
        <p>Want to wear some awesome YEAHWHAT?!-clothes? No problem! Generate your custom skin with unique clothes in YEAHWHAT?!-style</p>
      </div><!--/.jumbotron -->

      <?php
        if( !empty($_POST['ign']) && !empty($_POST['clothing']) ) {
      ?>
        <form method="POST" action="">
          <legend>Preview!</legend>
            <center>
              <img src="preview.php?ign=<?php echo $_POST['ign'] ?>&clothing=<?php echo $_POST['clothing'] ?>" />
              <img src="preview.php?ign=<?php echo $_POST['ign'] ?>&clothing=<?php echo $_POST['clothing'] ?>&back" />
            </center>
            <br/><br/>
            <div class="well" style="max-width: 400px; margin: 0 auto 10px;">
              <center>
                <p>
                  <a href="http://www.minecraft.net/skin/remote.jsp?url=http://yeahwh.at/download/<?php echo $_POST['ign'] ?>/<?php echo $_POST['clothing'] ?>" class="btn btn-primary">Apply on minecraft.net</a>
                </p>
                <p>
                  <a href="?ign=<?php echo $_POST['ign'] ?>&clothing=<?php echo $_POST['clothing'] ?>&mode=download" class="btn btn-primary">Download</a>
                </p>
              </center>
            </div><!--/.well -->
            <p>
              <a href="/" class="btn btn-mini">Back</a>
            </p>
      <?php
        }else{
      ?>
        <form method="POST" action="">
          <legend>Customize it!</legend>
            <?php if( isset($_POST['ign']) && empty($_POST['ign']) ) {
              echo '<p class="text-error">Please insert a IGN.</p>';
            } ?>
            <div class="form-group">
              <label class="control-label" for="inputUsername">Username</label>
              <input type="text" class="form-control" name="ign" id="inputUsername" placeholder="IGN">
            </div>

            <div class="form-group">
              <label class="control-label" for="optionsRadios1">Clothing</label>
              <label class="radio">
                <input type="radio" name="clothing" id="optionsRadios1" value="hoodie_white" checked>
                <img width="16px" src="preview.php?ign=Herobrine&clothing=hoodie_white" />
                Hoodie - White
              </label>
              <label class="radio">
                <input type="radio" name="clothing" id="optionsRadios2" value="hoodie_black">
                <img width="16px" src="preview.php?ign=Herobrine&clothing=hoodie_black" />
                Hoodie - Black
              </label>
              <label class="radio">
                <input type="radio" name="clothing" id="optionsRadios3" value="hoodie_blue">
                <img width="16px" src="preview.php?ign=Herobrine&clothing=hoodie_blue" />
                Hoodie - Blue
              </label>
              <label class="radio">
                <input type="radio" name="clothing" id="optionsRadios4" value="hoodie_green">
                <img width="16px" src="preview.php?ign=Herobrine&clothing=hoodie_green" />
                Hoodie - Green
              </label>
              <label class="radio">
                <input type="radio" name="clothing" id="optionsRadios5" value="hoodie_orange">
                <img width="16px" src="preview.php?ign=Herobrine&clothing=hoodie_orange" />
                Hoodie - Orange
              </label>
              <label class="radio">
                <input type="radio" name="clothing" id="optionsRadios6" value="hoodie_pink">
                <img width="16px" src="preview.php?ign=Herobrine&clothing=hoodie_pink" />
                Hoodie - Pink
              </label>
              <label class="radio">
                <input type="radio" name="clothing" id="optionsRadios7" value="hoodie_purple">
                <img width="16px" src="preview.php?ign=Herobrine&clothing=hoodie_purple" />
                Hoodie - Purple
              </label>
              <label class="radio">
                <input type="radio" name="clothing" id="optionsRadios8" value="hoodie_red">
                <img width="16px" src="preview.php?ign=Herobrine&clothing=hoodie_red" />
                Hoodie - Red
              </label>
              <label class="radio">
                <input type="radio" name="clothing" id="optionsRadios9" value="hoodie_yellow">
                <img width="16px" src="preview.php?ign=Herobrine&clothing=hoodie_yellow" />
                Hoodie - Yellow
              </label>
              <label class="radio">
                <input type="radio" name="clothing" id="optionsRadios10" value="hoodie_light_rainbow">
                <img width="16px" src="preview.php?ign=Herobrine&clothing=hoodie_light_rainbow" />
                Hoodie - Rainbow light
              </label>
              <label class="radio">
                <input type="radio" name="clothing" id="optionsRadios11" value="hoodie_dark_rainbow">
                <img width="16px" src="preview.php?ign=Herobrine&clothing=hoodie_dark_rainbow" />
                Hoodie - Rainbow dark
              </label>
              <label class="radio">
                <input type="radio" name="clothing" id="optionsRadios12" value="suit">
                <img width="16px" src="preview.php?ign=Herobrine&clothing=suit" />
                Suit
              </label>
              <label class="radio">
                <input type="radio" name="clothing" id="optionsRadios13" value="girly_purple">
                <img width="16px" src="preview.php?ign=Rabias&clothing=girly_purple" />
                Girly - Purple
              </label>
              <label class="radio">
                <input type="radio" name="clothing" id="optionsRadios14" value="girly_rose">
                <img width="16px" src="preview.php?ign=Rabias&clothing=girly_rose" />
                Girly - Rosé
              </label>
              <br/>
              <button type="submit" class="btn">Generate & preview</button>
            </div><!--/.form-group -->
          </form><!--/.form-horizontal -->
      <?php
        }
      ?>
      <footer>
        <hr>
        <p>&copy; frdmn 2015 - <a href="https://github.com/yeahwhat-mc/BukkitWardrobe" target="_blank">BukkitWardrobe</a></p>
      </footer>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/build.js"></script>
  </body>
</html>
