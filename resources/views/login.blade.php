<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>登录 - Admin</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/AdminLTE/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="bower_components/AdminLTE/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="bower_components/AdminLTE/dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="bower_components/iCheck/skins/square/blue.css">
  <link rel="stylesheet" href="/bower_components/form.validation/dist/css/formValidation.min.css">
  <style>
.login-page { background:#3c8dbc; }
.login-logo a { color:#fff; }
.login-box-body { box-shadow:0 14px 24px 0 rgba(50,49,58,.25);border-radius:6px; }
  </style>
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Admin</b>Panel</a>
    </div>
    <div class="login-box-body">
      <p class="login-box-msg">
        @if (session('msg'))
          <span style="color:red">{{ session('msg') }}</span>
        @else
          请在此处登录
        @endif
      </p>
      <form action="" method="post" data-fv-addons="i18n">
        {{ csrf_field() }}
        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email" name="email"
              data-fv-notempty="true" data-fv-emailaddress="true">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password"
              data-fv-notempty="true">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-7">
            <input type="text" class="form-control" name="vcode" data-fv-notempty="true">
          </div>
          <div class="col-xs-5"><img src="{{ Captcha::src() }}" style="width:100%;"></div>
        </div>
        <div class="row" style="margin-top:10px;">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> 记住我?
              </label>
            </div>
          </div>
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/adminlte.min.js"></script>
  <script src="bower_components/iCheck/icheck.min.js"></script>
  <script src="/bower_components/form.validation/dist/js/formValidation.min.js"></script>
  <script src="/bower_components/form.validation/dist/js/framework/bootstrap.min.js"></script>
  <script src="/js/i18n.min.js"></script>
  <script src="/bower_components/form.validation/dist/js/language/zh_CN.js"></script>
  <script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
    $('form').formValidation('setLocale', 'zh_CN');
  });
  </script>
</body>
</html>
