<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('config/db.php');

if(isset($_SESSION['logged']) && $_SESSION['logged'] === "true") {
  header('Location: index.php');
}

if(isset($_POST['username']) & isset($_POST['password'])) {
  $query=$db->prepare("SELECT username, password FROM userinfo");
  $query->execute();
  $data=$query->fetch();
  if ($data['username'] === $_POST['username'] & $data['password'] === md5(sha1($_POST['password']))) {
    $_SESSION['logged'] = "true";
    header('Location: index.php');
  } else {
    echo "wrong username/password";
  }
}

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>Beagle</title>
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="assets/css/app.css" type="text/css"/>
  </head>
  <body class="be-splash-screen">
    <div class="be-wrapper be-login">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container">
            <div class="card card-border-color card-border-color-primary">
              <div class="card-header"><img class="logo-img" src="assets/img/logo-xx.png" alt="logo" width="102" height="27"><span class="splash-description">Please enter your user information.</span></div>
              <div class="card-body">
                <form action="login.php" method="post">
                  <div class="form-group">
                    <input class="form-control" name="username" id="username" type="text" placeholder="Username" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="password" id="password" type="password" placeholder="Password">
                  </div>
                  <div class="form-group login-submit"><button class="btn btn-space btn-primary" type="submit">Submit</button></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      });
      
    </script>
  </body>
</html>