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

<?php
session_start();
include('config/db.php');

if(isset($_SESSION['logged']) && $_SESSION['logged'] === "true") {
	echo "Welcome !";
	echo"	<div class=\"row\">
            <div class=\"col-lg-7 offset-lg-2\">
              <div class=\"card card-flat be-loading text-center\">
                <div class=\"card-header\">Load Example</div>
                <div class=\"card-body\">
                  <p>Aliquam posuere volutpat turpis, ut euimod diam pellentesque at. Sed sit amet nulla a dui dignisim euismod. Morbi luctus elementum dictum. Donec convallis mattis elit id varius. Quisque facilisis sapien quis mauris, erat condimentum.</p>
                  <button class=\"btn btn-primary btn-xl toggle-loading\">Trigger loader</button>
                </div>
                <div class=\"be-spinner\">
                  <svg width=\"40px\" height=\"40px\" viewBox=\"0 0 66 66\" xmlns=\"http://-www.w3.org/2000/svg\">
                    <circle class=\"circle\" fill=\"none\" stroke-width=\"4\" stroke-linecap=\"round\" cx=\"33\" cy=\"33\" r=\"30\"></circle>
                  </svg>
                </div>
              </div>
            </div>
          </div>";
} else {
	$query=$db->prepare("SELECT ready FROM infos");
  	$query->execute();
  	$data=$query->fetch();
  	if ($data['ready'] === "1") {
  		header('Location: login.php');
	} else {
		header('Location: install.php?action=configure');
	}
}

?>