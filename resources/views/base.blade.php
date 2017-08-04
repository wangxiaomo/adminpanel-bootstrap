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
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <a href="../../index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
      </a>
      <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
      </nav>
    </header>

    <aside class="main-sidebar">
      <section class="sidebar">
        <ul class="sidebar-menu tree" data-widget="tree">
          <li class="header">Header</li>
          <li class="active"><a href="#"><i class="fa fa-link"></i><span>link</span></a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-link"></i><span>Multi</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
            <ul class="treeview-menu" style="display:none">
              <li><a href="#">link</a></li>
              <li><a href="#">link</a></li>
            </ul>
          </li>
        </ul>
      </section>
    </aside>

    <div class="content-wrapper">
      <section class="content-header">
        <h1>Page Header<small>Optional description</small></h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
          <li class="active">Here</li>
        </ol>
      </section>
      <section class="content container-fluid">
        | Your Page Content Here |
      </section>
    </div>

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        Anything you want
      </div>
      <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
    </footer>
  </div>
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
  <!--
  <script src="bower_components/AdminLTE/dist/js/app.min.js"></script>
  -->
  <script src="js/adminlte.min.js"></script>
</body>
</html>
