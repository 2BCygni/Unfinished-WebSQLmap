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
        <div class="card-header card-header-divider">Configure WebSQLmap<span class="card-subtitle">OS, SQLmap path...</span></div>
        <div class="card-body">
          <form action="install.php?action=configure" method="post">
            <div class="form-group row pt-1 pb-1">
              <label class="col-12 col-sm-3 col-form-label text-sm-right">Your OS : </label>
              <div class="col-12 col-sm-8 col-lg-6 form-check mt-1">
                <label class="custom-control custom-checkbox custom-control-inline">
                  <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Windows</span>
                </label>
                <label class="custom-control custom-checkbox custom-control-inline">
                  <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Linux based</span>
                </label>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputSmall">If Windows, Python 2.7 path :</label>
              <div class="col-12 col-sm-8 col-lg-6">
                <input class="form-control form-control-sm" name="pypath" id="pypath" type="text" value="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputSmall">SQLmap path :</label>
              <div class="col-12 col-sm-8 col-lg-6">
                <input class="form-control form-control-sm" name="sqlpath" id="sqlpath" type="text" value="">
              </div>
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
</div></div>
</body>