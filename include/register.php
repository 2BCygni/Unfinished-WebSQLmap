<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" type="text/css" href="assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/select2/css/select2.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap-slider/css/bootstrap-slider.min.css"/>
    <link rel="stylesheet" href="assets/css/app.css" type="text/css"/>
</head>
<body>
<div class="main-content container-fluid">
  <div class="row">
    <div class="col-lg-6">
      <div class="card card-border-color card-border-color-primary">
        <div class="card-header card-header-divider">Create your account<span class="card-subtitle">Secure the panel</span></div>
        <div class="card-body">
          <form action="install.php?action=register" method="post">
            <div class="form-group pt-2">
              <label for="username">Username</label>
              <input class="form-control" name="username" id="username" type="username" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input class="form-control" name="password" id="password" type="password" placeholder="Password">
            </div>
            <div class="row pt-3">
              <div class="col-lg-6 pb-4 pb-lg-0">
                <label class="be-checkbox custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember me</span>
                </label>
              </div>
              <div class="col-sm-6">
                <p class="text-right">
                  <button class="btn btn-space btn-primary" type="submit">Submit</button>
                  <button class="btn btn-space btn-secondary">Cancel</button>
                </p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>