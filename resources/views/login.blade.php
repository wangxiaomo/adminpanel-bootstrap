<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('page_title') - Admin</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/AdminLTE/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="bower_components/AdminLTE/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="bower_components/AdminLTE/dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="bower_components/iCheck/skins/square/blue.css">
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Admin</b>LTE</a>
    </div>
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <form action="../../index2.html" method="post">
        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Remember Me
              </label>
            </div>
          </div>
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
  <!--
  <script src="bower_components/AdminLTE/dist/js/app.min.js"></script>
  -->
  <script src="js/adminlte.min.js"></script>
  <script src="bower_components/iCheck/icheck.min.js"></script>
  <script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
  </script>
</body>
</html>
