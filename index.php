<?php
  // Include functions
  require_once("functions.inc.php");

  // Include configuration file
  require_once("config.php");

  // Check for _GET
  if (isset($_GET['username'])) {
    $username = $_GET['username'];
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

    <title><?php echo $settings['servername'] ?> - <?php echo $settings['title'] ?></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
  </head>

  <body role="document">
    <!-- Fixed navbar -->
    <nav class="navbar <?php if(isset($theme['navbar-dark']) && $theme['navbar-dark']){echo "navbar-inverse";} else {echo "navbar-default";} ?> navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $settings['website'] ?>">YEAHWHAT?!</a>
        </div><!--/.navbar-header -->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Skingenerator</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container -->
    </nav>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>YEAHWHAT?! Skingenerator!</h1>
        <p>Want to wear some awesome YEAHWHAT?!-clothes? No problem! Generate your custom skin with unique clothes in YEAHWHAT?!-style</p>
      </div><!--/.jumbotron -->

      <?php
        if( !empty($_POST['username']) && !empty($_POST['clothing']) ) {
      ?>
        <form method="POST" action="">
          <legend>Preview!</legend>
            <center>
              <img src="preview.php?username=<?php echo $_POST['username'] ?>&clothing=<?php echo $_POST['clothing'] ?>" />
              <img src="preview.php?username=<?php echo $_POST['username'] ?>&clothing=<?php echo $_POST['clothing'] ?>&back" />
            </center>
            <br/><br/>
            <div class="well" style="max-width: 400px; margin: 0 auto 10px;">
              <center>
                <p>
                  <a href="http://www.minecraft.net/skin/remote.jsp?url=http://<?php echo $full_url ?>download/<?php echo $_POST['username'] ?>/<?php echo $_POST['clothing'] ?>" class="btn btn-primary">Apply on minecraft.net</a>
                </p>
                <p>
                  <a href="?username=<?php echo $_POST['username'] ?>&clothing=<?php echo $_POST['clothing'] ?>&mode=download" class="btn btn-primary">Download</a>
                </p>
              </center>
            </div><!--/.well -->
            <p>
              <a href="javascript:window.history.back();" class="btn btn-mini">Back</a>
            </p>
      <?php
        }else{
      ?>
        <form method="POST" action="">
          <legend>Customize it!</legend>
            <?php if( isset($_POST['username']) && empty($_POST['username']) ) {
              echo '<div class="alert alert-danger" role="alert">
                      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                      <span class="sr-only">Error:</span>
                      Pleas enter an "Username".
                    </div>';
            } ?>
            <div class="form-group">
              <label class="control-label" for="inputUsername">Username</label>
              <input type="text" class="form-control" name="username" id="inputUsername" placeholder="Username">
            </div><!--/.form-group -->

            <div class="form-group">
              <div class="clothes-wrapper">
                <h5>Clothing</h5>
                <div class="row form-group clothes-chooser">
                  <noscript>
                    <div class="alert alert-warning" role="alert">
                      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                      <span class="sr-only">Error:</span>
                      JavaScript is disabled. Enable it and reload this page.
                    </div>
                  </noscript>
                </div><!--/.clothes-chooser -->
                <script class="clothes-chooser-template" type="text/x-handlebars-template">
                  {{#clothing}}
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                      <div class="clothes-chooser-item {{#if @first}}selected{{/if}}">
                        <img src="preview.php?username={{playermodel}}&clothing={{name}}" class="img-rounded img-clothing" alt="{{description}}"/>
                        <div>
                          <span class="title">{{description}}</span>
                          <input type="radio" name="clothing" value="{{name}}" {{#if @first}}checked="checked"{{/if}}>
                        </div><!--/.col-xs-8 -->
                        <div class="clear"></div>
                      </div><!--/.clothes-chooser-item -->
                    </div><!--/.col-xs-12 -->
                  {{/clothing}}
                </script><!--/.clothes-chooser-template -->
              </div><!--/.clothes-wrapper -->
              <br/>
              <div class="clearfix">
                <button type="submit" class="btn btn-lg btn-primary pull-right">Generate & preview</button>
              </div>
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
