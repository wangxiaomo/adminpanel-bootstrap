<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('page_title') - AdminPanel</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="/bower_components/AdminLTE/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="/bower_components/AdminLTE/dist/css/skins/skin-blue.min.css">
  @yield('page_header')
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <a href="/admin" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>AdP</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>Panel</span>
      </a>
      <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="user user-menu">
              <a href="#">
                <img src="/images/admin/u.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">{{ request()->admin_user->name }}</span>
              </a>
            </li>
            <li class="messages-menu">
              <a href="{{ route('admin.logout') }}">
                <i class="fa fa-lock"></i>注销登录
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <aside class="main-sidebar">
      @yield('sidebar')
    </aside>

    <div class="content-wrapper">
      @yield('content')
    </div>

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        落
      </div>
      <strong>Copyright &copy; 2017 <a href="http://www.minmore.com">小众科技</a>.</strong> All rights reserved.
    </footer>
  </div>
  <script src="/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
  <script src="/js/adminlte.min.js"></script>
  @yield('page_script')
  @include('mods.common')
</body>
</html
