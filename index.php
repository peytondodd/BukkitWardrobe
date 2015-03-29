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
if (isset($_GET['mode'])) {
  $mode = $_GET['mode'];
}

// Check if "download" mode
if ($mode && $mode=="download"){
  skin($username, $clothing, true);
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>YEAHWHAT?! Skingenerator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="http://yeahwh.at">YEAHWHAT?!</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Skingenerator</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->


      <!-- Example row of columns -->
      <div class="row">
        <div class="span3">
          <p></p>
        </div>
        <div class="span6">
        <div class="hero-unit">
          <h1>YEAHWHAT?! Skingenerator!</h1>
          <p><br/></p>
          <p>Want to wear some awesome YEAHWHAT?!-clothes? No problem! Generate your custom skin with unique clothes in YEAHWHAT?!-style</p>
        </div>

        <?php
          if( !empty($_POST['ign']) && !empty($_POST['clothing']) ) {
        ?>

      <form class="form-horizontal" method="POST" action="">
        <legend>Preview!</legend>

              <center>
                <img src="preview.php?ign=<?php echo $_POST['ign'] ?>&clothing=<?php echo $_POST['clothing'] ?>" />
                <img src="preview.php?ign=<?php echo $_POST['ign'] ?>&clothing=<?php echo $_POST['clothing'] ?>&back" />
              </center>
              <br/><br/>
        <div class="well" style="max-width: 400px; margin: 0 auto 10px;">
        <center>
              <p><a href="http://www.minecraft.net/skin/remote.jsp?url=http://yeahwh.at/download/<?php echo $_POST['ign'] ?>/<?php echo $_POST['clothing'] ?>" class="btn btn-primary">Apply on minecraft.net</a></p>
            <p><a href="?ign=<?php echo $_POST['ign'] ?>&clothing=<?php echo $_POST['clothing'] ?>&mode=download" class="btn btn-primary">Download</a></p>
          </center>
          </div>
              <p><a href="/" class="btn btn-mini">Back</a></p>


        <?php
        }else{
        ?>

            <form class="form-horizontal" method="POST" action="">
              <legend>Customize it!</legend>
              <?php if( isset($_POST['ign']) && empty($_POST['ign']) ) { echo '<p class="text-error">Please insert a IGN.</p>
'; } ?>
              <div class="control-group">
                <label class="control-label" for="inputUsername">Username</label>
                <div class="controls">
                  <input type="text" name="ign" id="inputUsername" placeholder="IGN">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label" for="optionsRadios1">Clothing</label>
                <div class="controls">
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
                </div>
              </div>
            </form>

            <?php
            }
            ?>
       </div>
        <div class="span3">
          <p></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; frdmn 2013</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./assets/js/build.js"></script>

  </body>
</html>
